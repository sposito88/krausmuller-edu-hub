
import React from 'react';
import CourseCard from './CourseCard';
import { Button } from "@/components/ui/button";
import { Link } from 'react-router-dom';

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
  }
];

const FeaturedCourses = () => {
  return (
    <section className="py-16 bg-gray-50">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-12">
          <h2 className="text-3xl font-bold text-gray-900 mb-4">Cursos em Destaque</h2>
          <p className="text-gray-600 max-w-2xl mx-auto">
            Conheça nossos cursos mais populares desenvolvidos por especialistas para impulsionar o seu desenvolvimento profissional.
          </p>
        </div>
        
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          {courses.map((course) => (
            <CourseCard key={course.id} {...course} />
          ))}
        </div>
        
        <div className="mt-12 text-center">
          <Button asChild className="bg-kmblue hover:bg-kmblue-light">
            <Link to="/cursos">Ver todos os cursos</Link>
          </Button>
        </div>
      </div>
    </section>
  );
};

export default FeaturedCourses;
