const { Schema, model } = require('mongoose');

const fileSchema = new Schema({
  filename: { type: String, required: true},
  originalName: { type: String, required: true},
  mimetype: { type: String, required: true},
  size: { type: Number, required: true},
  path: { type: String, required: true},
  description: { type: String, default: ''},
  /*categoy enum viejo: 'contenido_didactico','evaluaciones','asistencias','presentaciones','documentos','imagenes','general' */
  category: { type: String, enum: ['matematicas','lengua','ciencias','historia','geografia','fisica','quimica','biologia','informatica','tecnologia','ingles','educacion_fisica','arte','musica','general'], default: 'general'},
  professorId: { type: Schema.Types.ObjectId, ref: 'Professor', required: true},
  professorName: { type: String, required: true},
  uploadDate: { type: Date, default: Date.now},
  lastModified: { type: Date, default: Date.now},
  isPublic: { type: Boolean, default: false},
  tags: [{type: String}],
  downloads: { type: Number, default: 0}
});

// Índices para mejorar la consulta
fileSchema.index({ professorId: 1, category: 1 });
fileSchema.index({ professorId: 1, uploadDate: -1 });

// Middleware para actualizar lastModified
fileSchema.pre('save', function() {
  if (this.isModified() && !this.isNew) {
    this.lastModified = new Date();
  }
});

const File = model('File', fileSchema);
module.exports = File;