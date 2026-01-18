@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endpush

@section('content')
<div class="auth-wrapper">
    <div class="auth-card">
        <!-- Logo Text / Branding -->
        <div class="auth-header">
            <h2>SPRINGOO</h2>
            <p>Welcome Back</p>
        </div>

        <!-- Tabs -->
        <div class="auth-tabs">
            <button class="auth-tab-btn active" onclick="switchAuthTab('login')">Sign In</button>
            <button class="auth-tab-btn" onclick="switchAuthTab('register')">Sign Up</button>
        </div>

        <!-- Login Form -->
        <div id="login-pane" class="tab-pane active">
            <form action="#" method="POST">
                @csrf
                <div class="form-group">
                    <input type="email" class="form-input" placeholder="Email Address" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-input" placeholder="Password" required>
                </div>
                <div style="text-align: right; margin-bottom: 20px;">
                    <a href="#" class="auth-link" style="font-size: 0.8rem;">Forgot Password?</a>
                </div>
                
                <button type="submit" class="btn-auth-submit">
                    Enter
                </button>
            </form>
        </div>

        <!-- Register Form -->
        <div id="register-pane" class="tab-pane">
            <form action="#" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-input" placeholder="Full Name" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-input" placeholder="Email Address" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-input" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-input" placeholder="Confirm Password" required>
                </div>
                
                <button type="submit" class="btn-auth-submit">
                    Join Us
                </button>
            </form>
        </div>

        <!-- Social Login -->
        <div class="social-login">
            <button class="social-btn" title="Continue with Google">
                <i class="bi bi-google"></i>
            </button>
            <button class="social-btn" title="Continue with Facebook">
                <i class="bi bi-facebook"></i>
            </button>
        </div>

        <div class="auth-footer">
            <span style="color: rgba(255,255,255,0.6)">By continuing, you agree to our</span>
            <br>
            <a href="#" class="auth-link">Terms of Service</a> & <a href="#" class="auth-link">Privacy Policy</a>
        </div>
    </div>
</div>

<script>
    function switchAuthTab(tab) {
        document.querySelectorAll('.auth-tab-btn').forEach(btn => btn.classList.remove('active'));
        if(tab === 'login') {
            document.querySelectorAll('.auth-tab-btn')[0].classList.add('active');
            document.getElementById('login-pane').classList.add('active');
            document.getElementById('register-pane').classList.remove('active');
        } else {
            document.querySelectorAll('.auth-tab-btn')[1].classList.add('active');
            document.getElementById('login-pane').classList.remove('active');
            document.getElementById('register-pane').classList.add('active');
        }
    }
</script>
@endsection
