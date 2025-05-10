
import React from 'react';
import Navbar from '@/components/Navbar';
import Footer from '@/components/Footer';
import { Button } from "@/components/ui/button";
import { Link } from "react-router-dom";
import { BookOpen, Users, Award, Clock } from 'lucide-react';

const stats = [
  { icon: BookOpen, value: "50+", label: "Cursos disponíveis" },
  { icon: Users, value: "2.500+", label: "Alunos formados" },
  { icon: Award, value: "15+", label: "Anos de experiência" },
  { icon: Clock, value: "1.200+", label: "Horas de conteúdo" },
];

const About = () => {
  return (
    <div className="min-h-screen flex flex-col">
      <Navbar />
      <main className="flex-grow">
        <div className="bg-kmblue py-16">
          <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 className="text-3xl font-bold text-white mb-4">Sobre a KrausMuller Educacional</h1>
            <p className="text-blue-100 max-w-2xl mx-auto">
              Excelência em conhecimento corporativo e desenvolvimento profissional.
            </p>
          </div>
        </div>
        
        <section className="py-16">
          <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div className="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
              <div>
                <h2 className="text-2xl font-bold text-gray-900 mb-6">Nossa História</h2>
                <p className="text-gray-600 mb-4">
                  A KrausMuller Educacional nasceu como uma extensão natural da KrausMuller, empresa líder em consultoria 
                  empresarial fundada em 2008. Após anos auxiliando empresas a alcançarem seus objetivos estratégicos, 
                  identificamos a necessidade de compartilhar esse conhecimento de forma estruturada.
                </p>
                <p className="text-gray-600 mb-6">
                  Em 2015, lançamos nossa primeira série de cursos corporativos, focados em gestão empresarial e finanças. 
                  O sucesso foi imediato, e rapidamente expandimos nossa oferta para outras áreas do conhecimento corporativo, 
                  sempre mantendo nosso compromisso com a excelência e resultados práticos.
                </p>
                <Button asChild className="bg-kmblue hover:bg-kmblue-light">
                  <Link to="/cursos">Conheça nossos cursos</Link>
                </Button>
              </div>
              <div className="bg-gray-50 p-8 rounded-lg">
                <div className="grid grid-cols-2 gap-8">
                  {stats.map((stat, index) => (
                    <div key={index} className="text-center">
                      <div className="inline-flex items-center justify-center p-3 bg-kmblue/10 rounded-lg mb-4">
                        <stat.icon className="h-6 w-6 text-kmblue" />
                      </div>
                      <div className="text-3xl font-bold text-gray-900 mb-1">{stat.value}</div>
                      <div className="text-gray-600 text-sm">{stat.label}</div>
                    </div>
                  ))}
                </div>
              </div>
            </div>
          </div>
        </section>
        
        <section className="py-16 bg-gray-50">
          <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div className="text-center mb-12">
              <h2 className="text-3xl font-bold text-gray-900 mb-4">Nossa Missão e Valores</h2>
              <p className="text-gray-600 max-w-2xl mx-auto">
                Estamos comprometidos com a excelência educacional e o desenvolvimento profissional.
              </p>
            </div>
            
            <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
              <div className="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                <h3 className="text-xl font-semibold text-kmblue mb-4">Missão</h3>
                <p className="text-gray-600">
                  Transformar organizações e profissionais através da educação corporativa de alta qualidade, 
                  proporcionando conhecimento aplicável e resultados tangíveis.
                </p>
              </div>
              
              <div className="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                <h3 className="text-xl font-semibold text-kmblue mb-4">Visão</h3>
                <p className="text-gray-600">
                  Ser referência nacional em educação corporativa, reconhecida pela excelência acadêmica e 
                  pelo impacto positivo na trajetória profissional de nossos alunos.
                </p>
              </div>
              
              <div className="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                <h3 className="text-xl font-semibold text-kmblue mb-4">Valores</h3>
                <ul className="text-gray-600 space-y-2">
                  <li>• Excelência em tudo que fazemos</li>
                  <li>• Inovação constante</li>
                  <li>• Integridade e transparência</li>
                  <li>• Foco em resultados práticos</li>
                  <li>• Compromisso com o desenvolvimento</li>
                </ul>
              </div>
            </div>
          </div>
        </section>
        
        <section className="py-16">
          <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div className="text-center mb-12">
              <h2 className="text-3xl font-bold text-gray-900 mb-4">Nossa Equipe</h2>
              <p className="text-gray-600 max-w-2xl mx-auto">
                Conheça os especialistas que fazem parte do time KrausMuller Educacional.
              </p>
            </div>
            
            <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
              <div className="bg-white p-6 rounded-lg shadow-md text-center">
                <div className="w-24 h-24 bg-gray-300 rounded-full mx-auto mb-4"></div>
                <h3 className="text-lg font-semibold">Dr. Roberto Muller</h3>
                <p className="text-kmblue mb-2">Diretor Acadêmico</p>
                <p className="text-gray-600 text-sm">
                  Doutor em Administração de Empresas com mais de 20 anos de experiência em gestão corporativa.
                </p>
              </div>
              
              <div className="bg-white p-6 rounded-lg shadow-md text-center">
                <div className="w-24 h-24 bg-gray-300 rounded-full mx-auto mb-4"></div>
                <h3 className="text-lg font-semibold">Dra. Carla Kraus</h3>
                <p className="text-kmblue mb-2">Coordenadora de Finanças</p>
                <p className="text-gray-600 text-sm">
                  PhD em Economia e especialista em Finanças Corporativas com passagem por grandes instituições financeiras.
                </p>
              </div>
              
              <div className="bg-white p-6 rounded-lg shadow-md text-center">
                <div className="w-24 h-24 bg-gray-300 rounded-full mx-auto mb-4"></div>
                <h3 className="text-lg font-semibold">Prof. André Martins</h3>
                <p className="text-kmblue mb-2">Coordenador de Liderança</p>
                <p className="text-gray-600 text-sm">
                  Mestre em Psicologia Organizacional e consultor de desenvolvimento de líderes em empresas multinacionais.
                </p>
              </div>
            </div>
          </div>
        </section>
      </main>
      <Footer />
    </div>
  );
};

export default About;
