
import React from 'react';

const testimonials = [
  {
    content: "Os cursos da KrausMuller transformaram minha abordagem em gestão empresarial. O conteúdo prático e atual me ajudou a implementar mudanças significativas na minha empresa.",
    author: "Marcos Silva",
    position: "Diretor Executivo, TechSolutions"
  },
  {
    content: "A qualidade do material e a expertise dos professores fizeram toda a diferença no meu desenvolvimento profissional. Recomendo fortemente para quem busca excelência.",
    author: "Ana Paula Mendes",
    position: "Gerente de Projetos, Construtora Nacional"
  },
  {
    content: "O curso de Finanças Corporativas me proporcionou ferramentas valiosas que aplico diariamente. A metodologia é excelente e o networking, extraordinário.",
    author: "Ricardo Oliveira",
    position: "CFO, Grupo Inova"
  }
];

const Testimonials = () => {
  return (
    <section className="bg-kmblue py-16">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-12">
          <h2 className="text-3xl font-bold text-white mb-4">O que dizem nossos alunos</h2>
          <p className="text-blue-100 max-w-2xl mx-auto">
            Conheça a experiência de profissionais que transformaram suas carreiras com nossos cursos.
          </p>
        </div>
        
        <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
          {testimonials.map((testimonial, index) => (
            <div key={index} className="bg-white p-6 rounded-lg shadow-md relative">
              <div className="absolute -top-3 left-6 w-10 h-10 bg-white transform rotate-45"></div>
              <p className="text-gray-700 mb-6 relative z-10">"{testimonial.content}"</p>
              <div>
                <p className="font-semibold text-gray-900">{testimonial.author}</p>
                <p className="text-gray-600 text-sm">{testimonial.position}</p>
              </div>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
};

export default Testimonials;
