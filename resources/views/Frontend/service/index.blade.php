<div class="container my-4">
    <div class="text-center">
        <h4>Services</h4>
        <p>Pelayanan Yang Kami Sediakan.</p>
    </div>
    <div class="row">
        @for ($i = 0; $i < 4; $i++)
        <div class="col-md-3">
            <img src="{{ asset('assets/img/stb1.jpg')}}" class="img-fluid">
            <p class="text-center">STB</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum minus laborum, nobis quis excepturi quaerat? Id laboriosam odit dolorum est enim voluptatibus necessitatibus nam recusandae.</p>
        </div>
        @endfor
    </div>
</div>
