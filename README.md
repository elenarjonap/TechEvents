# Tech Events Manager
***
## Project name: 
<h1> <img src="https://user-images.githubusercontent.com/90152938/213161401-683faaae-6a24-4d7d-9343-0f73230dc7c0.png"> Las notas - Abrazarnos</h1>

***
## Project description:

Abrazarnos is an intermediary website where the different associations and animal protectors make known the animals they have to hug.

It is not the people who choose the animals, but rather they request a place to be interviewed by specialists who will decide which of the people is the right one for them.

Why hug us? Because adopting is a 100% bilateral relationship between two species. It is a welcome, a hug, a convience and a mutual love.

## Screenshots:
| Sketch | Figma | Atomic Design |Diagram|
| :--- | :---: | :---: | :---: |
|<img src="https://user-images.githubusercontent.com/90152938/212619576-efbb56f6-6443-4c08-8776-bf2a9ae6c59f.PNG"> |<img src="https://user-images.githubusercontent.com/90152938/212619812-fd6142f0-a7ab-4265-b5c0-98826e8c7350.PNG"> |<img src="https://user-images.githubusercontent.com/90152938/212619951-7c29a078-7beb-4ac1-9bf1-25e110701e96.PNG"> |<img src="https://user-images.githubusercontent.com/90152938/212621889-2a7c3cd8-3e3c-46ea-9b70-18b70759f41d.PNG">|

## Screenshots mobile format:
| Admin | User |
| --- | --- |
|<img style="width:135px;" src="https://user-images.githubusercontent.com/90152938/213170627-d9ac398f-be57-443b-9abb-c10b82b11a2d.png">|<img style="width:150px;" src="https://user-images.githubusercontent.com/90152938/213171364-4dd6df3d-a268-4fca-a2c7-6935ed690dad.png">|

## Stacks:
| Stacks |
| :--- |
|<img src="https://user-images.githubusercontent.com/90152938/212902837-d59dfe07-dfbb-44bd-841e-913dffe2f766.png">|

***
## Group members:
+ Elena     https://github.com/elenarjonap
+ Paloma    https://github.com/birdsinyourgarden
+ Sierri    https://github.com/sierriconvoz
+ Paula     https://github.com/pagudelo884

## How to install this project

1. Clone the project
```bash
git clone
https://github.com/elenarjonap/TechEvents
```


2. Create a MySQL database called "Abrazarnos"

3. Create an .env file in the text editor copying the content of .env.example and modify the name of the database (laravel by Abrazarnos")

4. Install dependencies
```bash
      install npm
```
```bash
      composer install
```

5. Activate the server and keep this terminal open
```bash
      npm run dev
```

6. Import database
```bash
      php artisan migrate:fresh --seed
```
7. Open php server
```bash
      php artisan serve
```   

## Run test:
To run the tests open terminal and enter the command 
```bash
  + php artisan test
  + vendor/bin/phpunit tests
```
<img width="450" alt="Screenshot_1" src="https://user-images.githubusercontent.com/90152938/213181668-8b9c2934-aa8e-4e77-a92d-553ba76ae5af.png">


## Methodology:
<li>Metodología Agile with Scrum</li>
<li>Mob Programming</li>
<li>TDD</li>


## Next Steps :
<li>Add limit of participants to the adoption process</li>
<li>Create external email</li>
<li>Block access to past adoption processes</li>
<li>Add new views</li>
<li>Organization of views in Laravel</li>
<li>Creation of a selectable Slider</li>




