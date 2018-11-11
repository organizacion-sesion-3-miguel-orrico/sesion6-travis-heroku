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
                {% for item in items %}
	  
                {
                    "href" : "{{ path_for('series') }}/{{ item.id }}",
                        "data" : [
                            {"name" : "name", "value" : "{{ item.name }}", "prompt" : "Nombre de la serie"}
                        ]
                        } {% if not loop.last %},{% endif %}
	  
                {% endfor %}
	  
            ],
      
            "template" : {
            "data" : [
                {"name" : "name", "value" : "", "prompt" : "Nombre de la serie"},
                {"name" : "description", "value" : "", "prompt" : "Descripción de la serie"},
                {"name" : "isbn", "value" : "", "prompt" : "ISBN de la serie"},
                {"name" : "datePublished", "value" : "", "prompt" : "Fecha de publicación"},
                {"name" : "image", "value" : "", "prompt" : "TImagen"}        
            ]
                }
    } 
}




