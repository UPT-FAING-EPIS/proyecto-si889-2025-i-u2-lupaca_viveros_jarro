---
marp: true
theme: default
paginate: true
---

# DocuCodeAI

### Sistema Inteligente de Análisis y Documentación de Código Fuente

###  - Farley Viveros
### - Daniel Lupaca
### Patrones de Software - 2025

---

# ¿Qué es DocuCodeAI?

🎯 Sistema web para analizar proyectos de código fuente:

- **Analiza código fuente PHP y otros lenguajes.**
- **Evalúa calidad de código.**
- **Detecta código duplicado.**
- **Genera diagramas UML automáticamente.**
- **Permite visualizar historial de análisis por usuario.**

✅ Orientado a entornos académicos y profesionales.

---

# Arquitectura general

```plaintext
+-----------+     +------------+     +--------------+     +-------------+
|   Usuario  | --> |  Interfaz   | --> |  Backend PHP  | --> |   Base de    |
| (Login)    |     | (HTML+CSS)  |     |  + OpenAI API |     |   Datos     |
+-----------+     +------------+     +--------------+     +-------------+
```

- **Backend**: PHP 8.2 + OpenAI API + PlantUML
- **Frontend**: HTML + CSS + Bootstrap simple
- **Base de datos**: MySQL (historial de análisis)

---

# Flujo de uso

1️⃣ **Login o registro de usuario**  
2️⃣ **Historial de análisis del usuario**  
3️⃣ **Nuevo Análisis**  
4️⃣ **Subida de archivo ZIP**  
5️⃣ **Análisis y generación de resultados**  
6️⃣ **Guardado automático en el historial**  
7️⃣ **Visualización del historial completo**

---

# Análisis de código

✅ **Resultado del análisis natural del código**  
✅ **Evaluación de la calidad del código**  
✅ **Detección de código duplicado**

Ejemplo:

```plaintext
El código es un ejemplo de aplicación MVC.
Calidad: 6/10.
Duplicados: Ninguno.
```

---

# Diagramas UML generados

✅ **Diagrama de Clases UML**  
✅ **Diagrama de Casos de Uso**  
✅ **Diagrama de Componentes**  
✅ **Diagrama de Paquetes**  
✅ **Diagramas de Secuencia**  
✅ **Diagramas de Actividad**

Ejemplo visual:

![Ejemplo UML](https://www.plantuml.com/plantuml/png/SoWkIImgAStDuKhEIImkLaZ8JYv9pSd9ICrBpSd91ICrKoZ8J4fFKL00)

---

# Historial de análisis

✅ Cada usuario visualiza su propio historial:

- Archivo analizado.
- Resumen del análisis.
- Calidad.
- Código duplicado.
- Diagramas UML.

Ejemplo de visualización en la interfaz:

```plaintext
robust_php_project.zip
Calidad: 6/10
Duplicados: Ninguno
Fecha: 2025-06-12
```

---

# Conclusiones y beneficios

🎯 **Beneficios de DocuCodeAI**:

- ✅ Automatiza tareas de revisión de código.
- ✅ Ahorra tiempo en generación de documentación.
- ✅ Mejora la comprensión del código.
- ✅ Fomenta buenas prácticas de desarrollo.
- ✅ Historial centralizado por usuario.

🚀 **Tecnologías usadas**:

- PHP 8.2 + OpenAI + PlantUML
- MySQL
- GitHub Actions (SonarCloud + Semgrep)
