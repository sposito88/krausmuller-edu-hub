
import React from 'react';
import Navbar from '@/components/Navbar';
import Footer from '@/components/Footer';
import CourseCard from '@/components/CourseCard';

const courses = [
  {
    id: "gestao-empresarial",
    title: "Gestão Empresarial Avançada",
    description: "Desenvolva habilidades de liderança e gestão para impulsionar o crescimento da sua empresa e equipe.",
    category: "Gestão",
    level: "Avançado",
    duration: "40 horas",
    students: 245,
    lessons: 24,
    image: "https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?auto=format&fit=crop&w=800&q=80"
  },
  {
    id: "financas-corporativas",
    title: "Finanças Corporativas",
    description: "Aprenda a tomar decisões financeiras estratégicas para maximizar o valor da sua empresa.",
    category: "Finanças",
    level: "Intermediário",
    duration: "32 horas",
    students: 178,
    lessons: 18,
    image: "https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=800&q=80"
  },
  {
    id: "lideranca-inovacao",
    title: "Liderança e Inovação",
    description: "Desenvolva as competências necessárias para liderar equipes e fomentar a inovação no ambiente corporativo.",
    category: "Liderança",
    level: "Intermediário",
    duration: "24 horas",
    students: 312,
    lessons: 16,
    image: "https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=800&q=80"
  },
  {
    id: "marketing-digital",
    title: "Marketing Digital Estratégico",
    description: "Aprenda estratégias avançadas de marketing digital para alavancar os resultados da sua empresa.",
    category: "Marketing",
    level: "Intermediário",
    duration: "28 horas",
    students: 198,
    lessons: 20,
    image: "https://images.unsplash.com/photo-1432888498266-38ffec3eaf0a?auto=format&fit=crop&w=800&q=80"
  },
  {
    id: "analise-dados",
    title: "Análise de Dados para Negócios",
    description: "Aprenda a extrair insights valiosos dos dados para tomar decisões mais assertivas.",
    category: "Dados",
    level: "Avançado",
    duration: "36 horas",
    students: 142,
    lessons: 22,
    image: "https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=800&q=80"
  },
  {
    id: "gestao-pessoas",
    title: "Gestão de Pessoas e Talentos",
    description: "Desenvolva estratégias eficientes para atrair, desenvolver e reter talentos na sua organização.",
    category: "Gestão",
    level: "Básico",
    duration: "20 horas",
    students: 267,
    lessons: 15,
    image: "https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=800&q=80"
  }
];

const Courses = () => {
  return (
    <div className="min-h-screen flex flex-col">
      <Navbar />
      <main className="flex-grow py-16">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center mb-12">
            <h1 className="text-3xl font-bold text-gray-900 mb-4">Nossos Cursos</h1>
            <p className="text-gray-600 max-w-2xl mx-auto">
              Explore nossa seleção de cursos desenvolvidos por especialistas para impulsionar sua carreira e desenvolvimento profissional.
            </p>
          </div>
          
          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            {courses.map((course) => (
              <CourseCard key={course.id} {...course} />
            ))}
          </div>
        </div>
      </main>
      <Footer />
    </div>
  );
};

export default Courses;
