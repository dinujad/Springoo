# prepare_deployment.ps1
# This script prepares your Laravel project for Shared Hosting

$ErrorActionPreference = "Stop"

Write-Host "Springoo Shared Hosting Deployment Preparer" -ForegroundColor Cyan
Write-Host "-------------------------------------------"

# 1. Define Paths
$ProjectRoot = Get-Location
$DistFolder = "$ProjectRoot\dist"
$DistPublic = "$DistFolder\public_html"
$DistCore = "$DistFolder\springoo_core"

# 2. Clean/Create Dist Folder
if (Test-Path $DistFolder) {
    Remove-Item $DistFolder -Recurse -Force
}
New-Item -ItemType Directory -Path $DistFolder | Out-Null
New-Item -ItemType Directory -Path $DistPublic | Out-Null
New-Item -ItemType Directory -Path $DistCore | Out-Null

Write-Host "Created dist folders..." -ForegroundColor Green

# 3. Copy Public Files to public_html
Write-Host "Copying public assets..."
Copy-Item "$ProjectRoot\public\*" -Destination $DistPublic -Recurse

# 4. Copy Core Files to springoo_core
Write-Host "Copying core files..."
# Exclude usually large or unnecessary folders for production upload if possible, 
# but for simplicity we copy main folders. We definitely skip .git, node_modules, and dist itself
$ExcludeItems = @(".git", "node_modules", "dist", "tests")
Get-ChildItem -Path $ProjectRoot -Exclude $ExcludeItems | ForEach-Object {
    if ($_.Name -ne "public") { # Skip public because we put contents in public_html
        Copy-Item $_.FullName -Destination $DistCore -Recurse
    }
}

# 5. Modify index.php for Shared Hosting Structure
Write-Host "Modifying index.php for shared hosting..."
$IndexFile = "$DistPublic\index.php"
$IndexContent = Get-Content $IndexFile

# Update paths to point to ../springoo_core instead of ..
$NewIndexContent = $IndexContent -replace "/\.\./vendor/autoload\.php", "/../springoo_core/vendor/autoload.php"
$NewIndexContent = $NewIndexContent -replace "/\.\./bootstrap/app\.php", "/../springoo_core/bootstrap/app.php"
# Be safe with storage path if it exists in standard index.php (Laravel 8 usually handles it in app.php but good to check)
$NewIndexContent = $NewIndexContent -replace "/\.\./storage/framework/maintenance\.php", "/../springoo_core/storage/framework/maintenance.php"

$NewIndexContent | Set-Content $IndexFile

Write-Host "-------------------------------------------"
Write-Host "Build Complete!" -ForegroundColor Green
Write-Host "Your files are ready in: $DistFolder"
Write-Host "1. Upload contents of 'springoo_core' to your server root (e.g. /home/user/springoo_core)"
Write-Host "2. Upload contents of 'public_html' to your public web folder (e.g. /home/user/public_html)"
Write-Host "-------------------------------------------"
