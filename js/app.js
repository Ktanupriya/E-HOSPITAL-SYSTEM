const express = require('express');
const bodyParser = require('body-parser');
const mysql = require('mysql');
const bcrypt = require('bcrypt');

const app = express();
app.use(bodyParser.json());

// MySQL Database Connection
const db = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'ehospital'
});

db.connect(err => {
    if (err) throw err;
    console.log('Database connected.');
});

// User Registration
app.post('/register', async (req, res) => {
    const { username, email, password } = req.body;
    const hashedPassword = await bcrypt.hash(password, 10);

    db.query('INSERT INTO users (username, email, password) VALUES (?, ?, ?)', [username, email, hashedPassword], (err, result) => {
        if (err) return res.json({ success: false, message: 'Registration failed' });
        res.json({ success: true, message: 'Registered successfully' });
    });
});

// User Login
app.post('/login', (req, res) => {
    const { username, password } = req.body;

    db.query('SELECT * FROM users WHERE username = ?', [username], async (err, results) => {
        if (err || results.length === 0) return res.json({ success: false, message: 'Invalid credentials' });

        const user = results[0];
        const isValid = await bcrypt.compare(password, user.password);
        if (!isValid) return res.json({ success: false, message: 'Invalid credentials' });

        res.json({ success: true, message: 'Login successful' });
    });
});

// Server
app.listen(3000, () => console.log('Server running on http://localhost:3000'));
