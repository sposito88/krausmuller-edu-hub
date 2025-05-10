
import React from 'react';
import { Link } from "react-router-dom";
import { Clock, Users, BookOpen } from "lucide-react";
import { Card, CardContent, CardFooter, CardHeader } from "@/components/ui/card";
import { Badge } from "@/components/ui/badge";
import { Button } from "@/components/ui/button";

interface CourseCardProps {
  id: string;
  title: string;
  description: string;
  category: string;
  level: string;
  duration: string;
  students: number;
  lessons: number;
  image: string;
}

const CourseCard: React.FC<CourseCardProps> = ({
  id,
  title,
  description,
  category,
  level,
  duration,
  students,
  lessons,
  image,
}) => {
  return (
    <Card className="overflow-hidden border border-gray-200 hover:shadow-lg transition-shadow duration-300">
      <div className="relative h-48 overflow-hidden">
        <img 
          src={image} 
          alt={title}
          className="w-full h-full object-cover transition-transform duration-300 hover:scale-105"
        />
        <Badge className="absolute top-4 right-4 bg-kmblue hover:bg-kmblue-light">
          {category}
        </Badge>
      </div>
      <CardHeader className="pb-2">
        <div className="flex justify-between items-start">
          <h3 className="text-lg font-semibold">{title}</h3>
          <Badge variant="outline" className="text-xs font-normal">
            {level}
          </Badge>
        </div>
      </CardHeader>
      <CardContent>
        <p className="text-sm text-gray-600 line-clamp-2 mb-4">{description}</p>
        <div className="flex flex-wrap gap-4 text-gray-500 text-xs">
          <div className="flex items-center">
            <Clock className="h-4 w-4 mr-1 text-kmblue-light" />
            {duration}
          </div>
          <div className="flex items-center">
            <Users className="h-4 w-4 mr-1 text-kmblue-light" />
            {students} alunos
          </div>
          <div className="flex items-center">
            <BookOpen className="h-4 w-4 mr-1 text-kmblue-light" />
            {lessons} aulas
          </div>
        </div>
      </CardContent>
      <CardFooter className="pt-2">
        <Button asChild className="w-full bg-kmblue hover:bg-kmblue-light">
          <Link to={`/cursos/${id}`}>Saiba Mais</Link>
        </Button>
      </CardFooter>
    </Card>
  );
};

export default CourseCard;
