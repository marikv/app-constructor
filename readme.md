Encryption keys generated successfully.
Personal access client created successfully.
Client ID: 1
Client secret: oruQ6B4GM1uickhVgmUIZhz3V0XVipGq1QsLNezK
Password grant client created successfully.
Client ID: 2
Client secret: 5OotIcq5cYeW9o5j9eQv2OClXiuDympISSukCcsK

php artisan serve

swagger http://127.0.0.1:8000/api/documentation
php artisan vendor:publish --provider "L5Swagger\L5SwaggerServiceProvider"


POST http://localhost:8000/api/register
REQUEST
name:test
email:test_email@gmail.ru
password:111111111
c_password:111111111


POST http://localhost:8000/oauth/token
REQUEST
username:test_email@gmail.ru
password:111111111
grant_type:password
client_id:2
client_secret:5OotIcq5cYeW9o5j9eQv2OClXiuDympISSukCcsK
RESPONSE
{
    "token_type": "Bearer",
    "expires_in": 31622400,
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6Ijg2Y2UxZmI4Yjc0M2UyNzhhNGQ1YmE2MWNiNjRmNmVmZGQ2NjgzMjQ3Y2FkYTZlZTgwMDVlYzU0ODhkODI5ZjkxYzU2Yjc1ZWRkMDFhZjQzIn0.eyJhdWQiOiIyIiwianRpIjoiODZjZTFmYjhiNzQzZTI3OGE0ZDViYTYxY2I2NGY2ZWZkZDY2ODMyNDdjYWRhNmVlODAwNWVjNTQ4OGQ4MjlmOTFjNTZiNzVlZGQwMWFmNDMiLCJpYXQiOjE1NTE5MDI0MTIsIm5iZiI6MTU1MTkwMjQxMiwiZXhwIjoxNTgzNTI0ODEyLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.Z_Sp3Q36atKsCHZKMe96ureVQck1FJdAQTRvWLSeQ4uW_kei4U3YP1oh4YzRsQVoZfXEsugAVGs85N6MbjFR12TyPuxAsDGA973QwjpkyKXs26tof3WU2BSgd6fqatUSQv_D7ZiHi-H6b35jy9SIdRGiur9GuUYwtkgh4Nkuf8LaqSFP-u_o8q9jnvR1cvmLmbGUinNLV81kABPd38cKf5fOt4ZeVqz3EakHVkG--bxcni4mALVc-tMGwf5FyZIL1BSqBcBFHaP-84FLN7phYtlUZV4jLFcQrt3nx7Bu8uH1hqWr8Y8T6FsWZdAIVEJctLyzUskjnO9zs7KCs_4Ro6TD_KlD-mx3ZA-v3wLRqh4mklOurVBE_2QWevXpnYAKUyEBV_m5hgpWVuZfaBi-oF5IXnoUbGdyJPtK3nuehbKTXpl-_iIW1zu862tJ-05jK0rinVVPczjvtBT-SleZ6nrvY_TphdHQII8pKd34fmWGiYma8Pzh9r2X7LeR7qPOyqxTmzHVLTTQvvwEUkep3MtuzRI457rkCsgnOW99IRQEA5O-OAet58xxaDfTKUW8eXWszT9PW0XhOcbTxBVk-e0l6JPICHszuvZYL9SWM0QIsManOC-SXCQs26bnkZYLkwOubjYkYouBM4PvxPZ14RD0LRmJo3R_AxW_e4BR4VM",
    "refresh_token": "def50200eb78d04b08bfd3a34a12be875e16644d37a381db696d87961663e45e4f0d5dbadb4c18e83f3782e82470e3af4e32eaeccaa4d006d98b50e5686ca874a585a2d6d64c5e96fe5a83b6cf61db757d5450f4281cbe97b170865d8605a0985cb65ed97891f674bacb5b21ec2ad44ecbada88a71ad75f380cbd0783c524c4a37b6e73bfe5aedaf2b50803eb4910700831f9706af8b1132138192f66e9eba933261d3cdc372903e1f29efaac859d7996f33ab1c9fb9ed929a9a6a89f7f6950533f736455e9771e94a66ea53f0a25bbbe327898d4c3835c9146e635cf8586996e4d7bd481219b578ec795b2a242ccc479637800a516802dd45352bf993eccfc35740ecaa25f32e86b59e58e44782e19efa46305edc8df5722837a87613170be485490747a5e91067ac4d511ac3ae667e21712a67b328315bb7d7309d62be6b70c114035c903ddd4483ea0b91c6e99f36d69b9102384e558c3319af75b9fcdf3bca"
}

GET http://localhost:8000/api/products
Authorization Bearer
......access_token......

POST http://localhost:8000/api/products
Authorization Bearer
......access_token......
name: "test product name",
detail: "test detail"


https://itsolutionstuff.com/post/laravel-57-create-rest-api-with-authentication-using-passport-tutorialexample.html
1) Login: Verb:GET, URL:http://localhost:8000/oauth/token
2) Register: Verb:GET, URL:http://localhost:8000/api/register
3) List: Verb:GET, URL:http://localhost:8000/api/products
4) Create: Verb:POST, URL:http://localhost:8000/api/products
5) Show: Verb:GET, URL:http://localhost:8000/api/products/{id}
6) Update: Verb:PUT, URL:http://localhost:8000/api/products/{id}
7) Delete: Verb:DELETE, URL:http://localhost:8000/api/products/{id}