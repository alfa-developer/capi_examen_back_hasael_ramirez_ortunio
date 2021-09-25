<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Usuarios
        </h2>
    </x-slot>

    <div class="py-12">
        {{--contenido--}}
        
        
        <div class="container">
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        Users
                    </div>
                    
                    <div class="card-body">
                        
                        {{--tabla--}}
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Name</th>
                              <th scope="col">Email</th>
                              <th scope="col">Birtday</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($users as $element)
                            <tr>
                              <th scope="row">{{$element->id}}</th>
                              <td>{{$element->name}}</td>
                              <td>{{$element->email}}</td>
                              <td>{{$element->fecha_nacimiento}}</td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                        {{ $users->links() }} 
                       
                    </div>
                </div>
            </div>
        </div>
        
        
        
        
        
        
        
    </div>
</x-app-layout>
