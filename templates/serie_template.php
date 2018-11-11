{ "collection" :
    {
         "title" : "Base de Datos de Series",
            "type" : "serie",
            "version" : "1.0",
            "href" : "{{ path_for('series')}}",
      
            "links" : [
                {"rel" : "profile" , "href" : "http://schema.org/Serie","prompt":"Perfil"},
                {"rel" : "collection", "href" : "{{ path_for('movies') }}","prompt":"Movies"},
                {"rel" : "collection", "href" : "{{ path_for('books') }}","prompt":"Books"},
                {"rel" : "collection", "href" : "{{ path_for('musicalbums') }}","prompt":"Music Albums"},
                {"rel" : "collection", "href" : "{{ path_for('series') }}","prompt":"Series"}

            ],
      
            "items" : [
                {
                    "href" : "{{ path_for('series') }}/{{ item.id }}",
                        "data" : [
                            {"name" : "name", "value" : "{{ item.name }}", "prompt" : "Nombre de la serie"},
                            {"name" : "description", "value" : "{{ item.description }}", "prompt" : "Descripción de la serie"},
                            {"name" : "temporadas", "value" : "{{ item.temporadas }}", "prompt" : "Temporadas de la serie"},
                            {"name" : "pais", "value" : "{{ item.pais }}", "prompt" : "País de la serie"},
                            {"name" : "datePublished", "value" : "{{ item.datePublished }}", "prompt" : "Fecha de publicación"},
                            {"name" : "image", "value" : "{{ item.image }}", "prompt" : "Imagen"}
                        ]
                        } 
	  
            ],
      
            "template" : {
            "data" : [
                {"name" : "name", "value" : "", "prompt" : "Nombre de la serie"},
                {"name" : "description", "value" : "", "prompt" : "Descripción de la serie"},
                {"name" : "temporadas", "value" : "", "prompt" : "Tempporadas de la serie"},
                {"name" : "pais", "value" : "", "prompt" : "país de la serie"},
                {"name" : "datePublished", "value" : "", "prompt" : "Fecha de publicación"},
                {"name" : "image", "value" : "", "prompt" : "TImagen"}        
            ]
                }
    } 
}




