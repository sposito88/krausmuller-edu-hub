
import React from 'react';
import Navbar from '@/components/Navbar';
import Footer from '@/components/Footer';
import { Button } from "@/components/ui/button";
import { Mail, Phone, MapPin, Clock } from "lucide-react";
import { Input } from "@/components/ui/input";
import { Textarea } from "@/components/ui/textarea";
import { useToast } from "@/components/ui/use-toast";

const Contact = () => {
  const { toast } = useToast();
  
  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();
    toast({
      title: "Mensagem enviada",
      description: "Agradecemos seu contato. Retornaremos em breve!",
    });
  };

  return (
    <div className="min-h-screen flex flex-col">
      <Navbar />
      <main className="flex-grow">
        <div className="bg-kmblue py-16">
          <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 className="text-3xl font-bold text-white mb-4">Entre em Contato</h1>
            <p className="text-blue-100 max-w-2xl mx-auto">
              Estamos à disposição para esclarecer dúvidas e ajudar você a encontrar o curso ideal para suas necessidades.
            </p>
          </div>
        </div>
        
        <section className="py-16">
          <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div className="grid grid-cols-1 lg:grid-cols-3 gap-8">
              <div className="lg:col-span-2">
                <h2 className="text-2xl font-bold text-gray-900 mb-6">Envie-nos uma mensagem</h2>
                <form onSubmit={handleSubmit} className="space-y-6">
                  <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div className="space-y-2">
                      <label htmlFor="name" className="text-sm font-medium text-gray-700">Nome completo</label>
                      <Input id="name" placeholder="Digite seu nome" required />
                    </div>
                    <div className="space-y-2">
                      <label htmlFor="email" className="text-sm font-medium text-gray-700">E-mail</label>
                      <Input id="email" type="email" placeholder="seu@email.com" required />
                    </div>
                  </div>
                  <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div className="space-y-2">
                      <label htmlFor="phone" className="text-sm font-medium text-gray-700">Telefone</label>
                      <Input id="phone" placeholder="(00) 00000-0000" />
                    </div>
                    <div className="space-y-2">
                      <label htmlFor="subject" className="text-sm font-medium text-gray-700">Assunto</label>
                      <Input id="subject" placeholder="Assunto da mensagem" required />
                    </div>
                  </div>
                  <div className="space-y-2">
                    <label htmlFor="message" className="text-sm font-medium text-gray-700">Mensagem</label>
                    <Textarea id="message" placeholder="Digite sua mensagem" rows={5} required />
                  </div>
                  <Button type="submit" className="bg-kmblue hover:bg-kmblue-light">
                    Enviar mensagem
                  </Button>
                </form>
              </div>
              
              <div className="bg-gray-50 p-6 rounded-lg h-fit">
                <h3 className="text-xl font-semibold text-gray-900 mb-6">Informações de contato</h3>
                
                <div className="space-y-6">
                  <div className="flex items-start">
                    <Mail className="h-5 w-5 text-kmblue mr-3 mt-0.5" />
                    <div>
                      <p className="font-medium text-gray-900">E-mail</p>
                      <p className="text-gray-600">educacional@krausmuller.com.br</p>
                      <p className="text-gray-600">contato@krausmuller.com.br</p>
                    </div>
                  </div>
                  
                  <div className="flex items-start">
                    <Phone className="h-5 w-5 text-kmblue mr-3 mt-0.5" />
                    <div>
                      <p className="font-medium text-gray-900">Telefone</p>
                      <p className="text-gray-600">+55 (11) 3838-3838</p>
                      <p className="text-gray-600">+55 (11) 98765-4321</p>
                    </div>
                  </div>
                  
                  <div className="flex items-start">
                    <MapPin className="h-5 w-5 text-kmblue mr-3 mt-0.5" />
                    <div>
                      <p className="font-medium text-gray-900">Endereço</p>
                      <p className="text-gray-600">
                        Av. Paulista, 1000 - Bela Vista<br />
                        São Paulo - SP, 01310-100<br />
                        Brasil
                      </p>
                    </div>
                  </div>
                  
                  <div className="flex items-start">
                    <Clock className="h-5 w-5 text-kmblue mr-3 mt-0.5" />
                    <div>
                      <p className="font-medium text-gray-900">Horário de funcionamento</p>
                      <p className="text-gray-600">
                        Segunda a Sexta: 9h às 18h<br />
                        Sábado: 9h às 13h
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        
        <section className="py-16 bg-gray-50">
          <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div className="text-center mb-12">
              <h2 className="text-2xl font-bold text-gray-900 mb-4">Perguntas frequentes</h2>
              <p className="text-gray-600 max-w-2xl mx-auto">
                Encontre respostas para as dúvidas mais comuns sobre nossos cursos e processo de inscrição.
              </p>
            </div>
            
            <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div className="bg-white p-6 rounded-lg shadow-md">
                <h3 className="text-lg font-semibold text-gray-900 mb-2">Como funcionam as aulas?</h3>
                <p className="text-gray-600">
                  Nossos cursos são oferecidos em formato presencial e online, com aulas ao vivo e material didático 
                  disponibilizado em nossa plataforma de ensino. As turmas têm número limitado de alunos para garantir 
                  uma experiência de aprendizado personalizada.
                </p>
              </div>
              
              <div className="bg-white p-6 rounded-lg shadow-md">
                <h3 className="text-lg font-semibold text-gray-900 mb-2">Quais são as formas de pagamento?</h3>
                <p className="text-gray-600">
                  Aceitamos pagamentos via cartão de crédito (até 12x), boleto bancário, transferência bancária e PIX. 
                  Empresas que inscrevem grupos de funcionários têm condições especiais e podem solicitar faturamento direto.
                </p>
              </div>
              
              <div className="bg-white p-6 rounded-lg shadow-md">
                <h3 className="text-lg font-semibold text-gray-900 mb-2">Os certificados são reconhecidos?</h3>
                <p className="text-gray-600">
                  Sim, todos os nossos certificados são reconhecidos pelo mercado e emitidos pela KrausMuller Educacional, 
                  instituição com mais de 15 anos de atuação no mercado corporativo.
                </p>
              </div>
              
              <div className="bg-white p-6 rounded-lg shadow-md">
                <h3 className="text-lg font-semibold text-gray-900 mb-2">Há descontos para grupos?</h3>
                <p className="text-gray-600">
                  Sim, oferecemos condições especiais para empresas que inscrevem grupos de funcionários. Entre em contato 
                  com nossa equipe para mais informações sobre descontos corporativos.
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

export default Contact;
