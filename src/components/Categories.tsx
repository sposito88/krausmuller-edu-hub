
import React from 'react';
import { Link } from "react-router-dom";
import { BriefcaseBusiness, LineChart, Users, Globe, BarChart4, Brain } from "lucide-react";

const categories = [
  {
    icon: BriefcaseBusiness,
    title: "Gestão Empresarial",
    count: 8,
    path: "/cursos/gestao",
    color: "bg-blue-100 text-blue-700"
  },
  {
    icon: LineChart,
    title: "Finanças Corporativas",
    count: 6,
    path: "/cursos/financas",
    color: "bg-green-100 text-green-700"
  },
  {
    icon: Users,
    title: "Liderança",
    count: 5,
    path: "/cursos/lideranca",
    color: "bg-purple-100 text-purple-700"
  },
  {
    icon: Globe,
    title: "Marketing Digital",
    count: 4,
    path: "/cursos/marketing",
    color: "bg-orange-100 text-orange-700"
  },
  {
    icon: BarChart4,
    title: "Análise de Dados",
    count: 3,
    path: "/cursos/dados",
    color: "bg-red-100 text-red-700"
  },
  {
    icon: Brain,
    title: "Inovação",
    count: 4,
    path: "/cursos/inovacao",
    color: "bg-indigo-100 text-indigo-700"
  },
];

const Categories = () => {
  return (
    <section className="py-16">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-12">
          <h2 className="text-3xl font-bold text-gray-900 mb-4">Categorias de Cursos</h2>
          <p className="text-gray-600 max-w-2xl mx-auto">
            Explore nosso catálogo diversificado de cursos para encontrar o que melhor atende às suas necessidades profissionais.
          </p>
        </div>
        
        <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
          {categories.map((category, index) => (
            <Link 
              key={index} 
              to={category.path}
              className="group bg-white p-6 rounded-lg shadow-md border border-gray-100 hover:shadow-lg transition-shadow flex items-center"
            >
              <div className={`${category.color} p-3 rounded-lg mr-4 group-hover:scale-110 transition-transform`}>
                <category.icon className="h-6 w-6" />
              </div>
              <div>
                <h3 className="text-lg font-semibold text-gray-900 group-hover:text-kmblue transition-colors">
                  {category.title}
                </h3>
                <p className="text-gray-500 text-sm">{category.count} cursos</p>
              </div>
            </Link>
          ))}
        </div>
      </div>
    </section>
  );
};

export default Categories;
