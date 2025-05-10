
import React, { useEffect } from "react";
import { useLocation, Link } from "react-router-dom";
import { Button } from "@/components/ui/button";
import Navbar from "@/components/Navbar";
import Footer from "@/components/Footer";

const NotFound = () => {
  const location = useLocation();

  useEffect(() => {
    console.error(
      "404 Error: User attempted to access non-existent route:",
      location.pathname
    );
  }, [location.pathname]);

  return (
    <div className="min-h-screen flex flex-col">
      <Navbar />
      <main className="flex-grow flex items-center justify-center py-16">
        <div className="text-center px-4">
          <h1 className="text-6xl font-bold text-kmblue mb-4">404</h1>
          <p className="text-2xl text-gray-700 mb-6">Página não encontrada</p>
          <p className="text-gray-600 max-w-md mx-auto mb-8">
            A página que você está procurando pode ter sido removida ou está temporariamente indisponível.
          </p>
          <Button asChild className="bg-kmblue hover:bg-kmblue-light">
            <Link to="/">Voltar para a página inicial</Link>
          </Button>
        </div>
      </main>
      <Footer />
    </div>
  );
};

export default NotFound;
