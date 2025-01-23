<x-guest-layout>
  <!DOCTYPE html>
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
      <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
  
          <title>Laravel</title>
  
          <!-- Fonts -->
          <link rel="preconnect" href="https://fonts.bunny.net">
          <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
  
          <!-- Styles / Scripts -->
          @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
              @vite(['resources/css/app.css', 'resources/js/app.js'])
          @endif
      </head>
      <body>
          <table class="table-fixed">
              <thead>
                  <tr>
                      <th>nome</th>
                      <th>email</th>
                      <th>cargo</th>
                  </tr>
              </thead>
              <!-- O <tbody> agora envolve todas as linhas -->
              <tbody>
                  @foreach ($usuarios as $usuario)
                      <tr>
                          <td>{{ $usuario->name }}</td>
                          <td>{{ $usuario->email }}</td>
                          <td>{{ $usuario->cargo }}</td>
                      </tr>
                  @endforeach
              </tbody>
          </table>
      </body>
  </html>
  </x-guest-layout>
  