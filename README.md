[![Review Assignment Due Date](https://classroom.github.com/assets/deadline-readme-button-22041afd0340ce965d47ae6ef1cefeee28c7c493a6346c4f15d667ab976d596c.svg)](https://classroom.github.com/a/ZtQ31pSG)
[![Open in Codespaces](https://classroom.github.com/assets/launch-codespace-2972f46106e565e64193e422d61a12cf1da4916b45550586e14ef0a7c637dd04.svg)](https://classroom.github.com/open-in-codespaces?assignment_repo_id=19677797)

# DocuCode-AI

Sistema web inteligente para la evaluación automática de código fuente y generación de diagramas UML, orientado a mejorar el proceso de enseñanza-aprendizaje en el ámbito académico universitario.

---

## 🎓 Proyecto académico

Este proyecto fue desarrollado en el marco del curso **PATRONES DE SOFTWARE**  
Facultad de Ingeniería - EPIS - Universidad Privada de Tacna  
Docente: *Patrick José Cuadros Quiroga*

---

## 🚀 Descripción del Proyecto

**DocuCode-AI** es una plataforma web que permite a docentes y estudiantes:

- Analizar código fuente automáticamente utilizando IA (OpenAI API).
- Generar diagramas UML (Clases, Casos de Uso, Actividad, Componentes, Paquetes, Secuencia).
- Evaluar la calidad del código.
- Detectar código duplicado.
- Generar comentarios explicativos en el código.
- Consultar el historial de análisis por usuario.

---

## 📄 Documentación del Proyecto

| Documento | Formato PDF | Formato Markdown |
|-----------|-------------|------------------|
| FD01 - Informe de Factibilidad | [📄 Descargar](./FD01-EPIS-Informe%20de%20Factibilidad.pdf) | [📄 Ver MD](./FD01-Informe-Factibilidad.md) |
| FD02 - Informe de Visión de Producto | [📄 Descargar](./FD02-EPIS-Informe%20Vision.pdf) | [📄 Ver MD](./FD02-Informe-Vision.md) |
| FD03 - Informe de Especificación de Requerimientos | [📄 Descargar](./FD03-EPIS-Informe%20Especificación%20Requerimientos.pdf) | [📄 Ver MD](./FD03-EPIS-Informe%20Especificación%20Requerimientos.md) |
| FD04 - Informe de Arquitectura de Software | [📄 Descargar](./FD04-EPIS-Informe%20Arquitectura%20de%20Software.docx) | — |
| FD05 - Informe de Proyecto | 🚧 Pendiente | 🚧 Pendiente |
| Anexo - Diccionario de Datos | 🚧 Pendiente | 🚧 Pendiente |
| Anexo - Estándar de Programación | 🚧 Pendiente | 🚧 Pendiente |

---

## 📊 Análisis económico con Terraform

El análisis económico del proyecto ha sido realizado utilizando **Terraform** para simular la infraestructura requerida y calcular los costos asociados a un despliegue en la nube.

Resumen:

- VPS (Elastika) simulado: 2 vCPU, 4 GB RAM, 50 GB SSD → S/ 100 anuales.
- Beneficio / Costo (B/C): **16.24** → Proyecto viable (FD01).

Ver detalles completos en:  
👉 [FD01 - Informe de Factibilidad](./FD01-EPIS-Informe%20de%20Factibilidad.pdf)

---

## 📌 Puntos del GitHub Wiki

👉  [Acceder al Wiki del Proyecto](https://github.com/UPT-FAING-EPIS/proyecto-si889-2025-i-u2-lupaca_viveros_jarro/wiki)

El Wiki incluye:

- Descripción del producto
- Manual de uso
- Roadmap de versiones
- Características planeadas
- Posibles mejoras futuras

---

## 📍 Roadmap de versiones
Roadmap:
![image](https://github.com/user-attachments/assets/b8197fe7-f1fe-4703-b2b5-a9067bd036ed)
### Versión 1.0 (actual)

- Generación de diagramas UML básicos.
- Análisis de código con IA.
- Evaluación de calidad y duplicados.
- Historial de análisis por usuario.

### Futuras versiones (planeado)

- Exportación avanzada de reportes.
- Mejora de precisión en diagramas de actividad y secuencia.
- Soporte para más lenguajes (Java, C#).
- Integración con LMS institucional.

---

## 📝 Historias de usuario

| ID | Historia de Usuario |
|----|---------------------|
| HU01 | Como **docente**, quiero **analizar automáticamente el código fuente** para ahorrar tiempo en la evaluación. |
| HU02 | Como **estudiante**, quiero **generar automáticamente los diagramas UML** para mejorar la documentación de mis proyectos. |
| HU03 | Como **usuario**, quiero **ver el historial de mis análisis** para hacer seguimiento a mi progreso. |
| HU04 | Como **usuario**, quiero **detectar código duplicado** para mejorar la calidad de mi código. |

---

## ✅ Criterios de aceptación (formato Gherkin)

### HU01 - Análisis automático de código

```gherkin
DADO que soy un docente autenticado
CUANDO subo un archivo de código fuente
ENTONCES el sistema genera comentarios automáticos sobre el código
```

### HU02 - Generación de diagramas UML

```gherkin
DADO que soy un usuario autenticado
CUANDO subo un archivo ZIP con código fuente
ENTONCES el sistema genera automáticamente los diagramas UML solicitados
```

### HU04 - Detección de código duplicado

```gherkin
DADO que he subido un archivo de código fuente
CUANDO ejecuto la función de detección de duplicados
ENTONCES el sistema muestra un reporte de posibles duplicados encontrados
```

---

## 🛠️ Requisitos para desplegar el proyecto

### 📌 Requisitos del sistema

- Servidor VPS o local (XAMPP, WAMP, LAMP).
- PHP >= 8.1
- MySQL o MariaDB
- Composer

### 📌 Dependencias

- OpenAI API (API KEY)
- PlantUML
- Terraform

---

## ⚙️ Procedimiento de despliegue

### 1️⃣ Clonar el repositorio

```bash
git clone https://github.com/tu-usuario/docucode-ai.git
```

### 2️⃣ Instalar dependencias PHP

```bash
composer install
```

### 3️⃣ Configurar variables de entorno

Crear `.env`:

```env
OPENAI_API_KEY=tu_api_key
DB_HOST=localhost
DB_NAME=nombre_de_tu_db
DB_USER=usuario_db
DB_PASS=contraseña_db
```

### 4️⃣ Configurar la base de datos

Importar el script `database.sql` en MySQL/MariaDB.

### 5️⃣ Ejecutar el sistema

```
http://localhost/docucode-ai
```

---

## 🚀 GitHub Projects (tareas relacionadas a ramas)

👉 [Acceder a GitHub Projects](https://github.com/tu-usuario/docucode-ai/projects)

- HU01, HU02, HU03, HU04 → Completadas y vinculadas a ramas `feature/...` o `develop`.

---

## 🛡️ GitHub Actions - Seguridad

👉 [Acceder a GitHub Actions](https://github.com/UPT-FAING-EPIS/proyecto-si889-2025-i-u2-lupaca_viveros_jarro/actions)

- SonarQube → análisis de bugs y vulnerabilidades → configurado.
- Snyk o Semgrep → escaneo de dependencias → configurado.

---

## 🏷️ GitHub - Releases y Packages

👉 [Acceder a Releases](https://github.com/UPT-FAING-EPIS/proyecto-si889-2025-i-u2-lupaca_viveros_jarro/releases)

- Release v1.0 publicado.
- Package de distribución → publicado (opcional).

---

## 🤝 GitHub - Contribuciones al proyecto

| Integrante | Commits | Pull Requests | Issues cerrados |
|------------|---------|---------------|-----------------|
| Jose Luis Jarro Cachi | X | Y | Z |
| Farley Rodrigo Viveros Blanco | X | Y | Z |
| Ronal Daniel Lupaca Mamani | X | Y | Z |

---

## 🌍 Actions para despliegue de infraestructura


- Workflow [`terraform_deploy.yml`](./.github/workflows/terraform_deploy.yml) → despliegue real de infraestructura en AWS EC2 utilizando Terraform.

### Resultado de ejecución:

✅ Workflow ejecutado correctamente → instancia EC2 real creada.

```
Outputs:
instance_public_ip = "3.95.193.156"
```

### Evidencia:

Instancias EC2 creadas en AWS us-east-1 (N. Virginia):

![image](https://github.com/user-attachments/assets/e89796b6-9378-4f7b-bf1e-305d917df7b8)

![image](https://github.com/user-attachments/assets/b8b27d26-06e3-44b1-8f3e-6504286a5e0d)

![image](https://github.com/user-attachments/assets/3c7359ab-0081-4918-ab79-f68f4342dbe4)


### Archivos utilizados:

- [`terraform_deploy.yml`](./.github/workflows/terraform_deploy.yml)
- [`main.tf`](./infra/terraform/main.tf)
- [`variables.tf`](./infra/terraform/variables.tf)
- [`outputs.tf`](./infra/terraform/outputs.tf)

---

## 🚀 Actions para despliegue de la aplicación

- Workflow `app_deploy.yml` → despliegue automático de la app a servidor VPS.

---

## 🎬 Video de Exposición

👉 [Ver video en YouTube](https://youtu.be/TU_VIDEO)  
👉 [Presentación MARP](https://github.com/tu-usuario/docucode-ai/tree/main/docs/marp)

---

## 🧑‍💻 Autores

- Jose Luis Jarro Cachi - 2020067148
- Farley Rodrigo Eduardo Viveros Blanco - 2020066896
- Ronal Daniel Lupaca Mamani - 202006146

---

## 📜 Licencia

Este proyecto es de uso académico, desarrollado en el marco del curso **Patrones de Software - EPIS UPT**.

---
