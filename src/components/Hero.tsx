
import React from 'react';
import { Button } from "@/components/ui/button";

const Hero = () => {
  return (
    <div className="hero-pattern">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
        <div className="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
          <div>
            <h1 className="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-6 leading-tight">
              Transforme sua carreira com a excelência KrausMuller
            </h1>
            <p className="text-blue-100 text-lg mb-8 max-w-lg">
              Cursos e treinamentos corporativos desenvolvidos por especialistas para impulsionar o seu desenvolvimento profissional e organizacional.
            </p>
            <div className="flex flex-wrap gap-4">
              <Button className="bg-white text-kmblue hover:bg-gray-100 transition-colors">
                Conheça nossos cursos
              </Button>
              <Button variant="outline" className="text-white border-white hover:bg-kmblue-light transition-colors">
                Entre em contato
              </Button>
            </div>
          </div>
          <div className="hidden lg:block">
            <div className="bg-white rounded-lg shadow-xl p-6 transform rotate-3">
              <div className="rounded bg-gray-100 p-4 mb-4">
                <div className="h-4 w-3/4 bg-kmblue rounded"></div>
              </div>
              <div className="space-y-3">
                <div className="h-3 bg-gray-200 rounded"></div>
                <div className="h-3 bg-gray-200 rounded w-5/6"></div>
                <div className="h-3 bg-gray-200 rounded"></div>
                <div className="h-3 bg-gray-200 rounded w-4/6"></div>
              </div>
            </div>
            <div className="bg-white rounded-lg shadow-xl p-6 -mt-12 ml-12 transform -rotate-6">
              <div className="rounded bg-gray-100 p-4 mb-4">
                <div className="h-4 w-2/3 bg-kmblue-light rounded"></div>
              </div>
              <div className="space-y-3">
                <div className="h-3 bg-gray-200 rounded"></div>
                <div className="h-3 bg-gray-200 rounded w-3/6"></div>
                <div className="h-3 bg-gray-200 rounded"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
};

export default Hero;
