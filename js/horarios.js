document.addEventListener("DOMContentLoaded", () => {
  // Referencias a elementos del DOM
  const yearSelect = document.getElementById("year-select")
  const specialtySelect = document.getElementById("specialty-select")
  const specialtyContainer = document.getElementById("specialty-container")
  const scheduleBody = document.getElementById("schedule-body")

  // Horarios para cada año y especialidad
  const scheduleData = {
    // Ciclo básico (1ro a 3ro)
    1: {
      common: [
        {
          time: "7:30 - 8:10",
          monday: "Matemática",
          tuesday: "Lengua",
          wednesday: "Ciencias",
          thursday: "Historia",
          friday: "Geografía",
        },
        {
          time: "8:10 - 8:50",
          monday: "Matemática",
          tuesday: "Lengua",
          wednesday: "Ciencias",
          thursday: "Historia",
          friday: "Geografía",
        },
        {
          time: "8:50 - 9:30",
          monday: "Lengua",
          tuesday: "Matemática",
          wednesday: "Historia",
          thursday: "Ciencias",
          friday: "Inglés",
        },
        {
          time: "9:30 - 9:50",
          monday: "Recreo",
          tuesday: "Recreo",
          wednesday: "Recreo",
          thursday: "Recreo",
          friday: "Recreo",
        },
        {
          time: "9:50 - 10:30",
          monday: "Historia",
          tuesday: "Geografía",
          wednesday: "Matemática",
          thursday: "Lengua",
          friday: "Educación Física",
        },
        {
          time: "10:30 - 11:10",
          monday: "Geografía",
          tuesday: "Arte",
          wednesday: "Inglés",
          thursday: "Matemática",
          friday: "Educación Física",
        },
        {
          time: "11:10 - 11:50",
          monday: "Inglés",
          tuesday: "Arte",
          wednesday: "Educación Física",
          thursday: "Ciencias",
          friday: "Lengua",
        },
      ],
    },
    2: {
      common: [
        {
          time: "7:30 - 8:10",
          monday: "Lengua",
          tuesday: "Matemática",
          wednesday: "Historia",
          thursday: "Ciencias",
          friday: "Inglés",
        },
        {
          time: "8:10 - 8:50",
          monday: "Lengua",
          tuesday: "Matemática",
          wednesday: "Historia",
          thursday: "Ciencias",
          friday: "Inglés",
        },
        {
          time: "8:50 - 9:30",
          monday: "Matemática",
          tuesday: "Ciencias",
          wednesday: "Geografía",
          thursday: "Lengua",
          friday: "Historia",
        },
        {
          time: "9:30 - 9:50",
          monday: "Recreo",
          tuesday: "Recreo",
          wednesday: "Recreo",
          thursday: "Recreo",
          friday: "Recreo",
        },
        {
          time: "9:50 - 10:30",
          monday: "Ciencias",
          tuesday: "Historia",
          wednesday: "Lengua",
          thursday: "Matemática",
          friday: "Geografía",
        },
        {
          time: "10:30 - 11:10",
          monday: "Arte",
          tuesday: "Inglés",
          wednesday: "Matemática",
          thursday: "Educación Física",
          friday: "Ciencias",
        },
        {
          time: "11:10 - 11:50",
          monday: "Arte",
          tuesday: "Educación Física",
          wednesday: "Inglés",
          thursday: "Geografía",
          friday: "Lengua",
        },
      ],
    },
    3: {
      common: [
        {
          time: "7:30 - 8:10",
          monday: "Historia",
          tuesday: "Ciencias",
          wednesday: "Matemática",
          thursday: "Lengua",
          friday: "Geografía",
        },
        {
          time: "8:10 - 8:50",
          monday: "Historia",
          tuesday: "Ciencias",
          wednesday: "Matemática",
          thursday: "Lengua",
          friday: "Geografía",
        },
        {
          time: "8:50 - 9:30",
          monday: "Ciencias",
          tuesday: "Matemática",
          wednesday: "Lengua",
          thursday: "Historia",
          friday: "Inglés",
        },
        {
          time: "9:30 - 9:50",
          monday: "Recreo",
          tuesday: "Recreo",
          wednesday: "Recreo",
          thursday: "Recreo",
          friday: "Recreo",
        },
        {
          time: "9:50 - 10:30",
          monday: "Matemática",
          tuesday: "Lengua",
          wednesday: "Geografía",
          thursday: "Ciencias",
          friday: "Historia",
        },
        {
          time: "10:30 - 11:10",
          monday: "Inglés",
          tuesday: "Educación Física",
          wednesday: "Arte",
          thursday: "Matemática",
          friday: "Lengua",
        },
        {
          time: "11:10 - 11:50",
          monday: "Educación Física",
          tuesday: "Inglés",
          wednesday: "Arte",
          thursday: "Geografía",
          friday: "Ciencias",
        },
      ],
    },
    // Ciclo superior - Informática (4to a 7mo)
    4: {
      informatica: [
        {
          time: "7:30 - 8:10",
          monday: "Matemática",
          tuesday: "Programación",
          wednesday: "Física",
          thursday: "Lengua",
          friday: "Inglés Técnico",
        },
        {
          time: "8:10 - 8:50",
          monday: "Matemática",
          tuesday: "Programación",
          wednesday: "Física",
          thursday: "Lengua",
          friday: "Inglés Técnico",
        },
        {
          time: "8:50 - 9:30",
          monday: "Sistemas Operativos",
          tuesday: "Matemática",
          wednesday: "Lengua",
          thursday: "Programación",
          friday: "Física",
        },
        {
          time: "9:30 - 9:50",
          monday: "Recreo",
          tuesday: "Recreo",
          wednesday: "Recreo",
          thursday: "Recreo",
          friday: "Recreo",
        },
        {
          time: "9:50 - 10:30",
          monday: "Sistemas Operativos",
          tuesday: "Lengua",
          wednesday: "Matemática",
          thursday: "Programación",
          friday: "Redes",
        },
        {
          time: "10:30 - 11:10",
          monday: "Inglés Técnico",
          tuesday: "Física",
          wednesday: "Programación",
          thursday: "Matemática",
          friday: "Redes",
        },
        {
          time: "11:10 - 11:50",
          monday: "Educación Física",
          tuesday: "Física",
          wednesday: "Programación",
          thursday: "Sistemas Operativos",
          friday: "Redes",
        },
        {
          time: "11:50 - 12:30",
          monday: "Almuerzo",
          tuesday: "Almuerzo",
          wednesday: "Almuerzo",
          thursday: "Almuerzo",
          friday: "Almuerzo",
        },
        {
          time: "12:30 - 14:30",
          monday: "Taller",
          tuesday: "Taller",
          wednesday: "Taller",
          thursday: "Taller",
          friday: "Taller",
        },
      ],
      electromecanica: [
        {
          time: "7:30 - 8:10",
          monday: "Matemática",
          tuesday: "Electrotecnia",
          wednesday: "Física",
          thursday: "Lengua",
          friday: "Inglés Técnico",
        },
        {
          time: "8:10 - 8:50",
          monday: "Matemática",
          tuesday: "Electrotecnia",
          wednesday: "Física",
          thursday: "Lengua",
          friday: "Inglés Técnico",
        },
        {
          time: "8:50 - 9:30",
          monday: "Mecánica",
          tuesday: "Matemática",
          wednesday: "Lengua",
          thursday: "Electrotecnia",
          friday: "Física",
        },
        {
          time: "9:30 - 9:50",
          monday: "Recreo",
          tuesday: "Recreo",
          wednesday: "Recreo",
          thursday: "Recreo",
          friday: "Recreo",
        },
        {
          time: "9:50 - 10:30",
          monday: "Mecánica",
          tuesday: "Lengua",
          wednesday: "Matemática",
          thursday: "Electrotecnia",
          friday: "Materiales",
        },
        {
          time: "10:30 - 11:10",
          monday: "Inglés Técnico",
          tuesday: "Física",
          wednesday: "Dibujo Técnico",
          thursday: "Matemática",
          friday: "Materiales",
        },
        {
          time: "11:10 - 11:50",
          monday: "Educación Física",
          tuesday: "Física",
          wednesday: "Dibujo Técnico",
          thursday: "Mecánica",
          friday: "Materiales",
        },
        {
          time: "11:50 - 12:30",
          monday: "Almuerzo",
          tuesday: "Almuerzo",
          wednesday: "Almuerzo",
          thursday: "Almuerzo",
          friday: "Almuerzo",
        },
        {
          time: "12:30 - 14:30",
          monday: "Taller",
          tuesday: "Taller",
          wednesday: "Taller",
          thursday: "Taller",
          friday: "Taller",
        },
      ],
    },
    5: {
      informatica: [
        {
          time: "7:30 - 8:10",
          monday: "Matemática",
          tuesday: "Programación II",
          wednesday: "Base de Datos",
          thursday: "Lengua",
          friday: "Inglés Técnico",
        },
        {
          time: "8:10 - 8:50",
          monday: "Matemática",
          tuesday: "Programación II",
          wednesday: "Base de Datos",
          thursday: "Lengua",
          friday: "Inglés Técnico",
        },
        {
          time: "8:50 - 9:30",
          monday: "Redes Avanzadas",
          tuesday: "Matemática",
          wednesday: "Lengua",
          thursday: "Programación II",
          friday: "Base de Datos",
        },
        {
          time: "9:30 - 9:50",
          monday: "Recreo",
          tuesday: "Recreo",
          wednesday: "Recreo",
          thursday: "Recreo",
          friday: "Recreo",
        },
        {
          time: "9:50 - 10:30",
          monday: "Redes Avanzadas",
          tuesday: "Lengua",
          wednesday: "Matemática",
          thursday: "Programación II",
          friday: "Sistemas",
        },
        {
          time: "10:30 - 11:10",
          monday: "Inglés Técnico",
          tuesday: "Base de Datos",
          wednesday: "Programación II",
          thursday: "Matemática",
          friday: "Sistemas",
        },
        {
          time: "11:10 - 11:50",
          monday: "Educación Física",
          tuesday: "Base de Datos",
          wednesday: "Programación II",
          thursday: "Redes Avanzadas",
          friday: "Sistemas",
        },
        {
          time: "11:50 - 12:30",
          monday: "Almuerzo",
          tuesday: "Almuerzo",
          wednesday: "Almuerzo",
          thursday: "Almuerzo",
          friday: "Almuerzo",
        },
        {
          time: "12:30 - 14:30",
          monday: "Taller",
          tuesday: "Taller",
          wednesday: "Taller",
          thursday: "Taller",
          friday: "Taller",
        },
      ],
      electromecanica: [
        {
          time: "7:30 - 8:10",
          monday: "Matemática",
          tuesday: "Electrónica",
          wednesday: "Termodinámica",
          thursday: "Lengua",
          friday: "Inglés Técnico",
        },
        {
          time: "8:10 - 8:50",
          monday: "Matemática",
          tuesday: "Electrónica",
          wednesday: "Termodinámica",
          thursday: "Lengua",
          friday: "Inglés Técnico",
        },
        {
          time: "8:50 - 9:30",
          monday: "Máquinas Eléctricas",
          tuesday: "Matemática",
          wednesday: "Lengua",
          thursday: "Electrónica",
          friday: "Termodinámica",
        },
        {
          time: "9:30 - 9:50",
          monday: "Recreo",
          tuesday: "Recreo",
          wednesday: "Recreo",
          thursday: "Recreo",
          friday: "Recreo",
        },
        {
          time: "9:50 - 10:30",
          monday: "Máquinas Eléctricas",
          tuesday: "Lengua",
          wednesday: "Matemática",
          thursday: "Electrónica",
          friday: "Mecánica Aplicada",
        },
        {
          time: "10:30 - 11:10",
          monday: "Inglés Técnico",
          tuesday: "Termodinámica",
          wednesday: "Dibujo Técnico II",
          thursday: "Matemática",
          friday: "Mecánica Aplicada",
        },
        {
          time: "11:10 - 11:50",
          monday: "Educación Física",
          tuesday: "Termodinámica",
          wednesday: "Dibujo Técnico II",
          thursday: "Máquinas Eléctricas",
          friday: "Mecánica Aplicada",
        },
        {
          time: "11:50 - 12:30",
          monday: "Almuerzo",
          tuesday: "Almuerzo",
          wednesday: "Almuerzo",
          thursday: "Almuerzo",
          friday: "Almuerzo",
        },
        {
          time: "12:30 - 14:30",
          monday: "Taller",
          tuesday: "Taller",
          wednesday: "Taller",
          thursday: "Taller",
          friday: "Taller",
        },
      ],
    },
    6: {
      informatica: [
        {
          time: "7:30 - 8:10",
          monday: "Matemática",
          tuesday: "Desarrollo Web",
          wednesday: "Seguridad Informática",
          thursday: "Lengua",
          friday: "Inglés Técnico",
        },
        {
          time: "8:10 - 8:50",
          monday: "Matemática",
          tuesday: "Desarrollo Web",
          wednesday: "Seguridad Informática",
          thursday: "Lengua",
          friday: "Inglés Técnico",
        },
        {
          time: "8:50 - 9:30",
          monday: "Aplicaciones Móviles",
          tuesday: "Matemática",
          wednesday: "Lengua",
          thursday: "Desarrollo Web",
          friday: "Seguridad Informática",
        },
        {
          time: "9:30 - 9:50",
          monday: "Recreo",
          tuesday: "Recreo",
          wednesday: "Recreo",
          thursday: "Recreo",
          friday: "Recreo",
        },
        {
          time: "9:50 - 10:30",
          monday: "Aplicaciones Móviles",
          tuesday: "Lengua",
          wednesday: "Matemática",
          thursday: "Desarrollo Web",
          friday: "Administración",
        },
        {
          time: "10:30 - 11:10",
          monday: "Inglés Técnico",
          tuesday: "Seguridad Informática",
          wednesday: "Desarrollo Web",
          thursday: "Matemática",
          friday: "Administración",
        },
        {
          time: "11:10 - 11:50",
          monday: "Educación Física",
          tuesday: "Seguridad Informática",
          wednesday: "Desarrollo Web",
          thursday: "Aplicaciones Móviles",
          friday: "Administración",
        },
        {
          time: "11:50 - 12:30",
          monday: "Almuerzo",
          tuesday: "Almuerzo",
          wednesday: "Almuerzo",
          thursday: "Almuerzo",
          friday: "Almuerzo",
        },
        {
          time: "12:30 - 14:30",
          monday: "Taller",
          tuesday: "Taller",
          wednesday: "Taller",
          thursday: "Taller",
          friday: "Taller",
        },
      ],
      electromecanica: [
        {
          time: "7:30 - 8:10",
          monday: "Matemática",
          tuesday: "Automatización",
          wednesday: "Hidráulica",
          thursday: "Lengua",
          friday: "Inglés Técnico",
        },
        {
          time: "8:10 - 8:50",
          monday: "Matemática",
          tuesday: "Automatización",
          wednesday: "Hidráulica",
          thursday: "Lengua",
          friday: "Inglés Técnico",
        },
        {
          time: "8:50 - 9:30",
          monday: "Instalaciones",
          tuesday: "Matemática",
          wednesday: "Lengua",
          thursday: "Automatización",
          friday: "Hidráulica",
        },
        {
          time: "9:30 - 9:50",
          monday: "Recreo",
          tuesday: "Recreo",
          wednesday: "Recreo",
          thursday: "Recreo",
          friday: "Recreo",
        },
        {
          time: "9:50 - 10:30",
          monday: "Instalaciones",
          tuesday: "Lengua",
          wednesday: "Matemática",
          thursday: "Automatización",
          friday: "Electrónica Industrial",
        },
        {
          time: "10:30 - 11:10",
          monday: "Inglés Técnico",
          tuesday: "Hidráulica",
          wednesday: "Proyectos",
          thursday: "Matemática",
          friday: "Electrónica Industrial",
        },
        {
          time: "11:10 - 11:50",
          monday: "Educación Física",
          tuesday: "Hidráulica",
          wednesday: "Proyectos",
          thursday: "Instalaciones",
          friday: "Electrónica Industrial",
        },
        {
          time: "11:50 - 12:30",
          monday: "Almuerzo",
          tuesday: "Almuerzo",
          wednesday: "Almuerzo",
          thursday: "Almuerzo",
          friday: "Almuerzo",
        },
        {
          time: "12:30 - 14:30",
          monday: "Taller",
          tuesday: "Taller",
          wednesday: "Taller",
          thursday: "Taller",
          friday: "Taller",
        },
      ],
    },
    7: {
      informatica: [
        {
          time: "7:30 - 8:10",
          monday: "Matemática",
          tuesday: "Proyecto Final",
          wednesday: "Inteligencia Artificial",
          thursday: "Lengua",
          friday: "Inglés Técnico",
        },
        {
          time: "8:10 - 8:50",
          monday: "Matemática",
          tuesday: "Proyecto Final",
          wednesday: "Inteligencia Artificial",
          thursday: "Lengua",
          friday: "Inglés Técnico",
        },
        {
          time: "8:50 - 9:30",
          monday: "Sistemas Distribuidos",
          tuesday: "Matemática",
          wednesday: "Lengua",
          thursday: "Proyecto Final",
          friday: "Inteligencia Artificial",
        },
        {
          time: "9:30 - 9:50",
          monday: "Recreo",
          tuesday: "Recreo",
          wednesday: "Recreo",
          thursday: "Recreo",
          friday: "Recreo",
        },
        {
          time: "9:50 - 10:30",
          monday: "Sistemas Distribuidos",
          tuesday: "Lengua",
          wednesday: "Matemática",
          thursday: "Proyecto Final",
          friday: "Ética Profesional",
        },
        {
          time: "10:30 - 11:10",
          monday: "Inglés Técnico",
          tuesday: "Inteligencia Artificial",
          wednesday: "Proyecto Final",
          thursday: "Matemática",
          friday: "Ética Profesional",
        },
        {
          time: "11:10 - 11:50",
          monday: "Educación Física",
          tuesday: "Inteligencia Artificial",
          wednesday: "Proyecto Final",
          thursday: "Sistemas Distribuidos",
          friday: "Ética Profesional",
        },
        {
          time: "11:50 - 12:30",
          monday: "Almuerzo",
          tuesday: "Almuerzo",
          wednesday: "Almuerzo",
          thursday: "Almuerzo",
          friday: "Almuerzo",
        },
        {
          time: "12:30 - 14:30",
          monday: "Práctica Profesional",
          tuesday: "Práctica Profesional",
          wednesday: "Práctica Profesional",
          thursday: "Práctica Profesional",
          friday: "Práctica Profesional",
        },
      ],
      electromecanica: [
        {
          time: "7:30 - 8:10",
          monday: "Matemática",
          tuesday: "Proyecto Final",
          wednesday: "Robótica",
          thursday: "Lengua",
          friday: "Inglés Técnico",
        },
        {
          time: "8:10 - 8:50",
          monday: "Matemática",
          tuesday: "Proyecto Final",
          wednesday: "Robótica",
          thursday: "Lengua",
          friday: "Inglés Técnico",
        },
        {
          time: "8:50 - 9:30",
          monday: "Mantenimiento Industrial",
          tuesday: "Matemática",
          wednesday: "Lengua",
          thursday: "Proyecto Final",
          friday: "Robótica",
        },
        {
          time: "9:30 - 9:50",
          monday: "Recreo",
          tuesday: "Recreo",
          wednesday: "Recreo",
          thursday: "Recreo",
          friday: "Recreo",
        },
        {
          time: "9:50 - 10:30",
          monday: "Mantenimiento Industrial",
          tuesday: "Lengua",
          wednesday: "Matemática",
          thursday: "Proyecto Final",
          friday: "Ética Profesional",
        },
        {
          time: "10:30 - 11:10",
          monday: "Inglés Técnico",
          tuesday: "Robótica",
          wednesday: "Proyecto Final",
          thursday: "Matemática",
          friday: "Ética Profesional",
        },
        {
          time: "11:10 - 11:50",
          monday: "Educación Física",
          tuesday: "Robótica",
          wednesday: "Proyecto Final",
          thursday: "Mantenimiento Industrial",
          friday: "Ética Profesional",
        },
        {
          time: "11:50 - 12:30",
          monday: "Almuerzo",
          tuesday: "Almuerzo",
          wednesday: "Almuerzo",
          thursday: "Almuerzo",
          friday: "Almuerzo",
        },
        {
          time: "12:30 - 14:30",
          monday: "Práctica Profesional",
          tuesday: "Práctica Profesional",
          wednesday: "Práctica Profesional",
          thursday: "Práctica Profesional",
          friday: "Práctica Profesional",
        },
      ],
    },
  }

  // Función para obtener la clase CSS según la materia
  function getSubjectClass(subject) {
    const subjectLower = subject.toLowerCase()

    if (subjectLower === "recreo" || subjectLower === "almuerzo") {
      return "almuerzo"
    }

    if (subjectLower.includes("matemática")) return "matematica"
    if (subjectLower.includes("lengua")) return "lengua"
    if (subjectLower.includes("ciencias")) return "ciencias"
    if (subjectLower.includes("historia")) return "historia"
    if (subjectLower.includes("geografía")) return "geografia"
    if (subjectLower.includes("física")) return "fisica"
    if (subjectLower.includes("química")) return "quimica"
    if (subjectLower.includes("inglés")) return "ingles"
    if (subjectLower.includes("educación física")) return "educacion-fisica"
    if (subjectLower.includes("arte")) return "arte"
    if (subjectLower.includes("taller") || subjectLower.includes("práctica")) return "taller"
    if (
      subjectLower.includes("programa") ||
      subjectLower.includes("base de datos") ||
      subjectLower.includes("sistemas") ||
      subjectLower.includes("redes") ||
      subjectLower.includes("desarrollo") ||
      subjectLower.includes("aplicaciones") ||
      subjectLower.includes("inteligencia")
    )
      return "informatica"
    if (
      subjectLower.includes("electro") ||
      subjectLower.includes("mecánica") ||
      subjectLower.includes("máquinas") ||
      subjectLower.includes("termo") ||
      subjectLower.includes("hidráulica") ||
      subjectLower.includes("robótica") ||
      subjectLower.includes("instalaciones")
    )
      return "electromecanica"

    return ""
  }

  // Función para actualizar la tabla de horarios
  function updateSchedule() {
    const selectedYear = yearSelect.value
    const selectedSpecialty = specialtySelect.value

    let scheduleToShow
    // Mostrar/ocultar selector de especialidad según el año seleccionado
    if (Number.parseInt(selectedYear) >= 4) {
      specialtyContainer.style.display = "flex"
      scheduleToShow = scheduleData[selectedYear][selectedSpecialty]
    } else {
      specialtyContainer.style.display = "none"
      scheduleToShow = scheduleData[selectedYear].common
    }

    // Limpiar tabla actual
    scheduleBody.innerHTML = ""

    // Generar filas de la tabla
    scheduleToShow.forEach((row) => {
      const tr = document.createElement("tr")

      // Celda de horario
      const timeCell = document.createElement("td")
      timeCell.className = "time-cell"
      timeCell.textContent = row.time
      tr.appendChild(timeCell)

      // Celdas de materias para cada día
      ;["monday", "tuesday", "wednesday", "thursday", "friday"].forEach((day) => {
        const td = document.createElement("td")
        const subjectDiv = document.createElement("div")

        subjectDiv.textContent = row[day]
        subjectDiv.className = "subject " + getSubjectClass(row[day])

        td.appendChild(subjectDiv)
        tr.appendChild(td)
      })

      scheduleBody.appendChild(tr)
    })
  }

  // Event listeners
  yearSelect.addEventListener("change", updateSchedule)
  specialtySelect.addEventListener("change", updateSchedule)

  // Inicializar la tabla
  updateSchedule()
})
