const form = document.getElementById('login-form');
const mensaje = document.getElementById('mensaje');

form.addEventListener('submit', async (e) => {
  e.preventDefault();

  const username = document.getElementById('username').value;
  const password = document.getElementById('password').value;

  try {
    const res = await fetch('http://localhost:3000/login', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({ username, password })
    });

    const data = await res.json();

    if (data.success) {
      window.location.href = 'pepe.html';
    } else {
      mensaje.textContent = data.message;
      mensaje.style.color = 'red';
    }
  } catch (error) {
    mensaje.textContent = 'Error de conexión con el servidor';
    mensaje.style.color = 'red';
  }
});
