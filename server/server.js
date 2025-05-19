const express = require('express');
const cors = require('cors');
const app = express();
const PORT = 3000;

app.use(cors());
app.use(express.json());

const users = [
    { username: 'admin', password: '1234' },
    { username: 'user', password: 'abcd' }
];

app.post('/login', (req, res) => {
    const { username, password } = req.body;

    const user = users.find(
    u => u.username === username && u.password === password
    );

  if (user) {
    res.json({ success: true, message: 'Login exitoso' });
  } else {
    res.status(401).json({ success: false, message: 'Credenciales inválidas' });
  }
});

app.listen(PORT, () => {
  console.log(`API de login corriendo en http://localhost:${PORT}`);
});
