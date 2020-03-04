<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Laravel con Passport

Este sistema es un ejemplo de estudio sobre el uso y creación de un API muy simple usando passport.
Se usaron diferentes links de estudio así como revisión de videos de youtube para una mejor comprensión.

### Lista de links para el desarrollo de este proyecto:

- [Documentación de Laravel 6.x](https://laravel.com/docs/6.x/passport).
- [Lista de videos](https://www.youtube.com/watch?v=InQdgo_NW6Q&list=PLuCubSrRSzHZKYeo9LFd7siI2sogpOvCX).
- Por actualización de versión se reviso: [Cómo ejecutar make:auth en Laravel 6](https://www.youtube.com/watch?v=cjIMSNQ27Mg).
- Por actualización de versión se reviso: [Laravel 6! Instalación con Autenticación](https://www.youtube.com/watch?v=ikmfpJLvpjI)


## Configuración e instalación

Al descargar hay que ejecutar:

- `php artisan serve`
- `npm run dev`
- `php artisan migrate:refresh`
- `php artisan passport:install`
- `php artisan db:seed`


## ¿Cómo hacer consultas?

Antes de hacer consultas debe crear un **OAuth Clients** o un **Personal Access Tokens**.

Para esto tenemos que crear un usuario en la url: [http://127.0.0.1:8000/register](http://127.0.0.1:8000/register)

En cuanto creamos el usuario podremos crear una de las opciones.

## Consulta con Personal Access Tokens y Scopes

Hay que crear 3 Personal Accesss Tokens:

1. El primero sin scope
2. El segundo seleccionando el primer scope `get-posts`
3. El tercero seleccionando el segundo scope `get-two-posts`

**NOTA:**
Recuerda copiar  los tokens que te muestra. De esta forma ya se pueden consultar de 3 formas.

## Consulta 1 sin scope

Recuerda colocar el token que salió sin seleccionar el scope.

`GET /api/get/posts HTTP/1.1`
`Host: 127.0.0.1:8000`
`Content-Type: application/json`
`Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNWJiNzE4NGFiY2YyNjZlZTc2MTEwOWYzYmYzNjU4ZWI2NzU0NDA0NmVlMWRlOTY2ZDM1ZTYzNDAwMWM4NDdiMDAwMTVmNDY5MGJhN2IyYzEiLCJpYXQiOjE1ODMzNDg1NTksIm5iZiI6MTU4MzM0ODU1OSwiZXhwIjoxNjE0ODg0NTU5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.f0k0mx7-eNTLuf0fDdz7sPN_JBFjeY4lRjuKYQHpG8FDODGadsvROGYLJYksy-4CKnvpxkIfqKgY40GdWWjuqtoeyXTVyjvYWBsFrnFdaIJbJVSbLUnySi28Z1bhfwVS6QUxe3hzRD-vZ3TJeBnSbetFljvlIuy4BuyQ2nSit-MheI1Uxj19F9UrLgSVC9HqY_EZZaIEOfEcv-GtpcwKCmFycM2dNY__59nxadA27g_VtS5D8_p4lVhq4Swdidzu6MhJ-OTzHh3kaJ01ZjBU1HHOpeHOGWkAciuHLW9BZEJ52zF4Eof7PeotC9OB1vNSVoUVPIyvANT5wlJYW2-rNP_eFr5uW_QOUaloJ9gZx3l0LfLaGwC_wK_2tM2W8qLrc6-N_SGhwahdUvckevNvY_6zmhcVsbAAJm69OImx4fZ_qiIaxDgPzTrNUF7mxcQMQXXNgHht734ReLtNoIJ_5CETGBpxwlxTdIoKc_VKtdzVnDstZU5CJhuOjhP3nUdFzOetIL0_hD-JarCNL-y_2dNn5yAVZBR6G98TAHbuyl6xflL0NwVAu6uONRUtWyjSGw5ljmMDzAQG0IZjeax8FiCm_mKYmO_uGVq0zHAvidV5GHlhajWvqQd8O6M5b0BQqXqjPSMetEN_3duw6RSf5Mh-WtzdWwOYdy01f_OH_hA`

## Consulta 2 con scope `get-posts`
Recuerda colocar el token que salió con el scope `get-posts`

`GET /api/get/posts HTTP/1.1`
`Host: 127.0.0.1:8000`
`Content-Type: application/json`
`Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNWJiNzE4NGFiY2YyNjZlZTc2MTEwOWYzYmYzNjU4ZWI2NzU0NDA0NmVlMWRlOTY2ZDM1ZTYzNDAwMWM4NDdiMDAwMTVmNDY5MGJhN2IyYzEiLCJpYXQiOjE1ODMzNDg1NTksIm5iZiI6MTU4MzM0ODU1OSwiZXhwIjoxNjE0ODg0NTU5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.f0k0mx7-eNTLuf0fDdz7sPN_JBFjeY4lRjuKYQHpG8FDODGadsvROGYLJYksy-4CKnvpxkIfqKgY40GdWWjuqtoeyXTVyjvYWBsFrnFdaIJbJVSbLUnySi28Z1bhfwVS6QUxe3hzRD-vZ3TJeBnSbetFljvlIuy4BuyQ2nSit-MheI1Uxj19F9UrLgSVC9HqY_EZZaIEOfEcv-GtpcwKCmFycM2dNY__59nxadA27g_VtS5D8_p4lVhq4Swdidzu6MhJ-OTzHh3kaJ01ZjBU1HHOpeHOGWkAciuHLW9BZEJ52zF4Eof7PeotC9OB1vNSVoUVPIyvANT5wlJYW2-rNP_eFr5uW_QOUaloJ9gZx3l0LfLaGwC_wK_2tM2W8qLrc6-N_SGhwahdUvckevNvY_6zmhcVsbAAJm69OImx4fZ_qiIaxDgPzTrNUF7mxcQMQXXNgHht734ReLtNoIJ_5CETGBpxwlxTdIoKc_VKtdzVnDstZU5CJhuOjhP3nUdFzOetIL0_hD-JarCNL-y_2dNn5yAVZBR6G98TAHbuyl6xflL0NwVAu6uONRUtWyjSGw5ljmMDzAQG0IZjeax8FiCm_mKYmO_uGVq0zHAvidV5GHlhajWvqQd8O6M5b0BQqXqjPSMetEN_3duw6RSf5Mh-WtzdWwOYdy01f_OH_hA`

## Consulta 1 sin scope `get-two-posts`
Recuerda colocar el token que salió con el scope `get-two-posts`

`GET /api/two-posts HTTP/1.1`
`Host: 127.0.0.1:8000`
`Content-Type: application/json`
`Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIyIiwianRpIjoiOGI1NDQ2NmVlMzUyMzIwOTA0YmQ0NWMzNmU5YWJiNDVhMmY5ZDlhOTYwOTZkMjZhZmU3MmVlNDIzZWU4NjU4MGEzNGQ1YzE3MjQwMmVlODAiLCJpYXQiOjE1ODMzNDI3NjgsIm5iZiI6MTU4MzM0Mjc2OCwiZXhwIjoxNjE0ODc4NzY4LCJzdWIiOiIxIiwic2NvcGVzIjpbImdldC10d28tcG9zdHMiXX0.OUbQgE5SuV9kNAevfyPKepks4AcuAjiOsevnMtVW3_NM-YNE-Tm4tTIm0uV8Fcm-soxxamv7phPbmFP6x990BuZhbMMHG7tJGVmHkAORO_2Ouw97wk2uDWdB1wEzXk_z7NUjbeCHROkX-V9_xoLGNaSTriRm4_ZN3sqHRQ4lyPC4x4qcofQUpSYqOpHnlaaZ1c2gLJqQRewaHmk4lu94BsuNcq69OLW4X6UQyUxXydUHsiYXvdpnLD335GJpV4OsJcitrQGN8Nh1ucxI1X-0y_hzZaHK1SlD9IwdbIt32stCmRYjTdCzK04clLYhgsuehvgTsji2ZmdHvXuMUVGe-5zjJndt08pYHLoJSJdjdf4xK6VBms0XFStoy032cA1SVXnlDHlivbjOTpUH0i1wfszIRzIlulNm-OtWsCNRXFwD39Cr5XM7SWVBGVUeifyqoLIW1gTRT9A-PTQlProAQ8sZkKRPMCp5VXQj457f0Nm5AooOsz6wZAXxJHKWYeEei6PSbmvfEqaraTXm5RUu98q4dyjkI37dK_abSnUsy2HYYshFoxRrtEqM-7nA2zhkRkl_ivh-CEFVVQsvRQrou1kZ8Xi3OZMuLHjanAxzc8NewKneT5odlizqgMJVHjo7RY7RuNpdtNka4Y-z6OE2vKdA5OYUw7bCaUXGcik980o`

<p align="center"><img src="https://octodex.github.com/images/filmtocats.png" width="600"></p>
