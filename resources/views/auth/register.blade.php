<form action="{{ route('register') }}" method="POST">
    @csrf <!-- Pastikan ada ini -->
    <label>Nama:</label>
    <input type="text" name="name" required>
    
    <label>Email:</label>
    <input type="email" name="email" required>
    
    <label>Password:</label>
    <input type="password" name="password" required>
    
    <label>Konfirmasi Password:</label>
    <input type="password" name="password_confirmation" required>

    <button type="submit">Register</button>
</form>
