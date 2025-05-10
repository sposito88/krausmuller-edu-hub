
import React, { useState } from 'react';
import { Button } from "@/components/ui/button";
import { Menu, X, GraduationCap } from "lucide-react";
import { Link } from "react-router-dom";

const Navbar = () => {
  const [isOpen, setIsOpen] = useState(false);

  return (
    <nav className="bg-white shadow-md sticky top-0 z-50">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="flex justify-between h-20">
          <div className="flex items-center">
            <Link to="/" className="flex-shrink-0 flex items-center">
              <GraduationCap className="h-8 w-8 mr-2 text-kmblue" />
              <div className="text-xl font-bold text-kmblue">
                <span className="font-bold">KrausMuller</span>
                <span className="font-normal text-kmblue-light"> Educacional</span>
              </div>
            </Link>
          </div>
          
          <div className="hidden md:flex items-center space-x-8">
            <Link to="/" className="text-gray-700 hover:text-kmblue font-medium transition-colors">Home</Link>
            <Link to="/cursos" className="text-gray-700 hover:text-kmblue font-medium transition-colors">Cursos</Link>
            <Link to="/sobre" className="text-gray-700 hover:text-kmblue font-medium transition-colors">Sobre</Link>
            <Link to="/contato" className="text-gray-700 hover:text-kmblue font-medium transition-colors">Contato</Link>
            <Button className="bg-kmblue hover:bg-kmblue-light transition-colors">Inscrever-se</Button>
          </div>
          
          <div className="flex md:hidden">
            <button 
              onClick={() => setIsOpen(!isOpen)} 
              className="inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:text-kmblue focus:outline-none"
            >
              {isOpen ? <X className="h-6 w-6" /> : <Menu className="h-6 w-6" />}
            </button>
          </div>
        </div>
      </div>

      {/* Mobile menu */}
      {isOpen && (
        <div className="md:hidden">
          <div className="flex flex-col space-y-2 px-4 pt-2 pb-4 bg-white">
            <Link 
              to="/" 
              className="text-gray-700 hover:text-kmblue font-medium block px-3 py-2 rounded-md" 
              onClick={() => setIsOpen(false)}
            >
              Home
            </Link>
            <Link 
              to="/cursos" 
              className="text-gray-700 hover:text-kmblue font-medium block px-3 py-2 rounded-md"
              onClick={() => setIsOpen(false)}
            >
              Cursos
            </Link>
            <Link 
              to="/sobre" 
              className="text-gray-700 hover:text-kmblue font-medium block px-3 py-2 rounded-md"
              onClick={() => setIsOpen(false)}
            >
              Sobre
            </Link>
            <Link 
              to="/contato" 
              className="text-gray-700 hover:text-kmblue font-medium block px-3 py-2 rounded-md"
              onClick={() => setIsOpen(false)}
            >
              Contato
            </Link>
            <Button className="bg-kmblue hover:bg-kmblue-light transition-colors w-full mt-2">
              Inscrever-se
            </Button>
          </div>
        </div>
      )}
    </nav>
  );
};

export default Navbar;
