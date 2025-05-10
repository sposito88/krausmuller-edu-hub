
import React from 'react';
import { Link } from 'react-router-dom';
import { GraduationCap } from 'lucide-react';

const Footer = () => {
  return (
    <footer className="bg-gray-100 pt-12 pb-8">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="grid grid-cols-1 md:grid-cols-4 gap-8">
          <div className="md:col-span-1">
            <div className="flex items-center mb-4">
              <GraduationCap className="h-8 w-8 mr-2 text-kmblue" />
              <div className="text-xl font-bold text-kmblue">
                <span className="font-bold">KrausMuller</span>
                <span className="font-normal text-kmblue-light"> Educacional</span>
              </div>
            </div>
            <p className="text-gray-600 text-sm">
              Excelência em conhecimento corporativo e desenvolvimento profissional.
            </p>
          </div>
          
          <div>
            <h3 className="font-medium text-gray-900 mb-4">Links Rápidos</h3>
            <ul className="space-y-2">
              <li><Link to="/" className="text-gray-600 hover:text-kmblue text-sm">Home</Link></li>
              <li><Link to="/cursos" className="text-gray-600 hover:text-kmblue text-sm">Cursos</Link></li>
              <li><Link to="/sobre" className="text-gray-600 hover:text-kmblue text-sm">Sobre</Link></li>
              <li><Link to="/contato" className="text-gray-600 hover:text-kmblue text-sm">Contato</Link></li>
            </ul>
          </div>
          
          <div>
            <h3 className="font-medium text-gray-900 mb-4">Cursos</h3>
            <ul className="space-y-2">
              <li><Link to="/cursos/gestao" className="text-gray-600 hover:text-kmblue text-sm">Gestão Empresarial</Link></li>
              <li><Link to="/cursos/financas" className="text-gray-600 hover:text-kmblue text-sm">Finanças Corporativas</Link></li>
              <li><Link to="/cursos/lideranca" className="text-gray-600 hover:text-kmblue text-sm">Liderança e Inovação</Link></li>
              <li><Link to="/cursos/marketing" className="text-gray-600 hover:text-kmblue text-sm">Marketing Digital</Link></li>
            </ul>
          </div>
          
          <div>
            <h3 className="font-medium text-gray-900 mb-4">Contato</h3>
            <ul className="space-y-2">
              <li className="text-gray-600 text-sm">Email: educacional@krausmuller.com.br</li>
              <li className="text-gray-600 text-sm">Telefone: +55 (11) 3838-3838</li>
              <li className="text-gray-600 text-sm">São Paulo - SP</li>
            </ul>
          </div>
        </div>
        
        <div className="border-t border-gray-200 mt-8 pt-8">
          <p className="text-gray-600 text-sm text-center">
            © {new Date().getFullYear()} KrausMuller Educacional. Todos os direitos reservados.
          </p>
        </div>
      </div>
    </footer>
  );
};

export default Footer;
