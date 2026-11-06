<?php

namespace Database\Seeders;

use App\Models\Idea;
use Illuminate\Database\Seeder;

class IdeaSeeder extends Seeder
{
    public function run(): void
    {
        // Tecnología
        Idea::FirstOrCreate([
            'titulo' => 'Aplicación para organizar citas veterinarias',
            'descripcion' => 'Sistema para registrar y organizar citas de mascotas.',
            'estado' => 'registrada',
            'autor' => 'Jose',
            'categoria_id' => 1,
        ]);

        Idea::FirstOrCreate([
            'titulo' => 'Gestor de contraseñas familiar',
            'descripcion' => 'Aplicación para guardar y compartir contraseñas de forma segura entre familiares.',
            'estado' => 'en revisión',
            'autor' => 'Carlos',
            'categoria_id' => 1,
        ]);

        Idea::FirstOrCreate([
            'titulo' => 'Chatbot de atención a clientes',
            'descripcion' => 'Asistente virtual que responde preguntas frecuentes de pequeños negocios.',
            'estado' => 'registrada',
            'autor' => 'Ana',
            'categoria_id' => 1,
        ]);

        Idea::FirstOrCreate([
            'titulo' => 'Sistema de inventario para tiendas locales',
            'descripcion' => 'Herramienta para controlar existencias, entradas y salidas de productos.',
            'estado' => 'registrada',
            'autor' => 'Luis',
            'categoria_id' => 1,
        ]);

        Idea::FirstOrCreate([
            'titulo' => 'Aplicación de respaldo automático en la nube',
            'descripcion' => 'Servicio que respalda archivos importantes de manera programada.',
            'estado' => 'en revisión',
            'autor' => 'Mariana',
            'categoria_id' => 1,
        ]);

        // Educación
        Idea::FirstOrCreate([
            'titulo' => 'Plataforma para cursos en línea',
            'descripcion' => 'Sistema para ofrecer cursos y materiales educativos.',
            'estado' => 'en revisión',
            'autor' => 'Pedro',
            'categoria_id' => 2,
        ]);

        Idea::FirstOrCreate([
            'titulo' => 'Tutorías entre estudiantes',
            'descripcion' => 'Plataforma que conecta a estudiantes que necesitan apoyo con compañeros que dominan el tema.',
            'estado' => 'registrada',
            'autor' => 'Sofía',
            'categoria_id' => 2,
        ]);

        Idea::FirstOrCreate([
            'titulo' => 'Generador de tarjetas de estudio',
            'descripcion' => 'Herramienta que convierte apuntes en tarjetas de repaso.',
            'estado' => 'registrada',
            'autor' => 'Daniel',
            'categoria_id' => 2,
        ]);

        Idea::FirstOrCreate([
            'titulo' => 'Agenda escolar inteligente',
            'descripcion' => 'Aplicación que organiza tareas, exámenes y proyectos con recordatorios.',
            'estado' => 'en revisión',
            'autor' => 'Valeria',
            'categoria_id' => 2,
        ]);

        Idea::FirstOrCreate([
            'titulo' => 'Biblioteca digital de recursos abiertos',
            'descripcion' => 'Repositorio de libros, guías y videos gratuitos clasificados por nivel educativo.',
            'estado' => 'registrada',
            'autor' => 'Ricardo',
            'categoria_id' => 2,
        ]);

        // Salud
        Idea::FirstOrCreate([
            'titulo' => 'Recordatorio de medicamentos',
            'descripcion' => 'Aplicación que avisa la hora y la dosis de cada medicamento.',
            'estado' => 'registrada',
            'autor' => 'Laura',
            'categoria_id' => 3,
        ]);

        Idea::FirstOrCreate([
            'titulo' => 'Diario de hábitos saludables',
            'descripcion' => 'Registro diario de sueño, hidratación, alimentación y actividad física.',
            'estado' => 'en revisión',
            'autor' => 'Miguel',
            'categoria_id' => 3,
        ]);

        Idea::FirstOrCreate([
            'titulo' => 'Seguimiento de estado de ánimo',
            'descripcion' => 'Herramienta para registrar emociones y detectar patrones a lo largo del tiempo.',
            'estado' => 'registrada',
            'autor' => 'Elena',
            'categoria_id' => 3,
        ]);

        Idea::FirstOrCreate([
            'titulo' => 'Rutinas de ejercicio en casa',
            'descripcion' => 'Plataforma con rutinas cortas adaptadas al nivel y espacio disponible.',
            'estado' => 'registrada',
            'autor' => 'Andrés',
            'categoria_id' => 3,
        ]);

        Idea::FirstOrCreate([
            'titulo' => 'Expediente médico familiar',
            'descripcion' => 'Sistema para guardar estudios, vacunas y citas médicas de cada integrante de la familia.',
            'estado' => 'en revisión',
            'autor' => 'Paola',
            'categoria_id' => 3,
        ]);

        // Medio ambiente
        Idea::FirstOrCreate([
            'titulo' => 'Mapa de centros de reciclaje',
            'descripcion' => 'Aplicación que muestra los puntos de reciclaje cercanos y los materiales que aceptan.',
            'estado' => 'registrada',
            'autor' => 'Fernando',
            'categoria_id' => 4,
        ]);

        Idea::FirstOrCreate([
            'titulo' => 'Calculadora de huella de carbono',
            'descripcion' => 'Herramienta que estima el impacto ambiental personal y sugiere cómo reducirlo.',
            'estado' => 'en revisión',
            'autor' => 'Gabriela',
            'categoria_id' => 4,
        ]);

        Idea::FirstOrCreate([
            'titulo' => 'Huertos urbanos comunitarios',
            'descripcion' => 'Plataforma para organizar vecinos que quieran cultivar alimentos en espacios compartidos.',
            'estado' => 'registrada',
            'autor' => 'Héctor',
            'categoria_id' => 4,
        ]);

        Idea::FirstOrCreate([
            'titulo' => 'Monitor de consumo de agua',
            'descripcion' => 'Sistema que registra el consumo doméstico de agua y alerta sobre fugas o excesos.',
            'estado' => 'registrada',
            'autor' => 'Isabel',
            'categoria_id' => 4,
        ]);

        Idea::FirstOrCreate([
            'titulo' => 'Intercambio de objetos reutilizables',
            'descripcion' => 'Red local para regalar, prestar o intercambiar cosas en lugar de desecharlas.',
            'estado' => 'en revisión',
            'autor' => 'Jorge',
            'categoria_id' => 4,
        ]);

        // Pasatiempos
        Idea::FirstOrCreate([
            'titulo' => 'Aplicación para control de libros',
            'descripcion' => 'Sistema para guardar libros y citas textuales',
            'estado' => 'registrada',
            'autor' => 'Noemí',
            'categoria_id' => 5,
        ]);

        Idea::FirstOrCreate([
            'titulo' => 'Catálogo de colección de videojuegos',
            'descripcion' => 'Aplicación para registrar juegos, plataformas y progreso de cada título.',
            'estado' => 'en revisión',
            'autor' => 'Emilio',
            'categoria_id' => 5,
        ]);

        Idea::FirstOrCreate([
            'titulo' => 'Organizador de recetas favoritas',
            'descripcion' => 'Herramienta para guardar recetas, ingredientes y listas de compras.',
            'estado' => 'registrada',
            'autor' => 'Carmen',
            'categoria_id' => 5,
        ]);

        Idea::FirstOrCreate([
            'titulo' => 'Planificador de rutas de senderismo',
            'descripcion' => 'Aplicación para guardar rutas, dificultad y notas de cada excursión.',
            'estado' => 'registrada',
            'autor' => 'Raúl',
            'categoria_id' => 5,
        ]);

        Idea::FirstOrCreate([
            'titulo' => 'Club virtual de juegos de mesa',
            'descripcion' => 'Plataforma para organizar partidas, llevar puntuaciones y coordinar encuentros.',
            'estado' => 'en revisión',
            'autor' => 'Diana',
            'categoria_id' => 5,
        ]);
    }
}