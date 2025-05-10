
import React from 'react';
import { Button } from "@/components/ui/button";
import { Link } from "react-router-dom";

const CallToAction = () => {
  return (
    <section className="py-16 bg-gray-50">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="bg-white p-8 md:p-12 rounded-lg shadow-md border border-gray-100">
          <div className="grid grid-cols-1 lg:grid-cols-5 gap-8 items-center">
            <div className="lg:col-span-3">
              <h2 className="text-2xl md:text-3xl font-bold text-gray-900 mb-4">
                Pronto para transformar sua carreira?
              </h2>
              <p className="text-gray-600 mb-6">
                Inscreva-se em nossos cursos e tenha acesso a conteúdos exclusivos, professores especializados e uma rede de contatos que vai impulsionar seu desenvolvimento profissional.
              </p>
              <div className="flex flex-wrap gap-4">
                <Button asChild className="bg-kmblue hover:bg-kmblue-light">
                  <Link to="/cursos">Explorar Cursos</Link>
                </Button>
                <Button variant="outline" asChild>
                  <Link to="/contato">Fale com um Consultor</Link>
                </Button>
              </div>
            </div>
            <div className="lg:col-span-2 bg-kmblue rounded-lg p-6">
              <div className="text-center">
                <h3 className="text-xl font-semibold text-white mb-4">Receba novidades</h3>
                <p className="text-blue-100 mb-4 text-sm">
                  Cadastre-se para receber atualizações sobre novos cursos, eventos e conteúdos exclusivos.
                </p>
                <div className="space-y-3">
                  <input
                    type="email"
                    placeholder="Seu e-mail"
                    className="w-full px-4 py-2 rounded border border-blue-300 focus:outline-none focus:ring-2 focus:ring-kmblue"
                  />
                  <Button className="w-full bg-white text-kmblue hover:bg-gray-100">
                    Inscrever-se
                  </Button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default CallToAction;
