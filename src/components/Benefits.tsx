
import React from 'react';
import { GraduationCap, Award, BookOpen, Users } from 'lucide-react';

const benefits = [
  {
    icon: GraduationCap,
    title: "Professores Especializados",
    description: "Nossos cursos são ministrados por especialistas com vasta experiência no mercado corporativo."
  },
  {
    icon: Award,
    title: "Certificados Reconhecidos",
    description: "Receba certificados reconhecidos pelo mercado que valorizam seu currículo profissional."
  },
  {
    icon: BookOpen,
    title: "Conteúdo Atualizado",
    description: "Material didático constantemente atualizado com as últimas tendências do mercado."
  },
  {
    icon: Users,
    title: "Networking Qualificado",
    description: "Conecte-se com profissionais e expanda sua rede de contatos corporativos."
  }
];

const Benefits = () => {
  return (
    <section className="py-16">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-12">
          <h2 className="text-3xl font-bold text-gray-900 mb-4">Por que escolher a KrausMuller Educacional?</h2>
          <p className="text-gray-600 max-w-2xl mx-auto">
            Oferecemos uma experiência de aprendizado transformadora, voltada para resultados práticos e desenvolvimento profissional.
          </p>
        </div>
        
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
          {benefits.map((benefit, index) => (
            <div key={index} className="bg-white p-6 rounded-lg shadow-md border border-gray-100 hover:shadow-lg transition-shadow">
              <div className="inline-flex items-center justify-center p-3 bg-kmblue/10 rounded-lg mb-4">
                <benefit.icon className="h-6 w-6 text-kmblue" />
              </div>
              <h3 className="text-lg font-semibold mb-2">{benefit.title}</h3>
              <p className="text-gray-600 text-sm">{benefit.description}</p>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
};

export default Benefits;
