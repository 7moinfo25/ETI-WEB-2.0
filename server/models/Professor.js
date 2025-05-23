const { Schema, model } = require('mongoose');

const profesorSchema = new Schema({
  nombre: { type: String, required: true },
  email: { type: String, required: true, unique: true },
  contrasena: { type: String, required: true }
});

const Professor = model('Professor', profesorSchema);
module.exports = Professor;