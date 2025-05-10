
import React from 'react';
import Navbar from '@/components/Navbar';
import Footer from '@/components/Footer';
import Hero from '@/components/Hero';
import FeaturedCourses from '@/components/FeaturedCourses';
import Benefits from '@/components/Benefits';
import Categories from '@/components/Categories';
import Testimonials from '@/components/Testimonials';
import CallToAction from '@/components/CallToAction';

const Index = () => {
  return (
    <div className="min-h-screen flex flex-col">
      <Navbar />
      <main className="flex-grow">
        <Hero />
        <Categories />
        <FeaturedCourses />
        <Benefits />
        <Testimonials />
        <CallToAction />
      </main>
      <Footer />
    </div>
  );
};

export default Index;
