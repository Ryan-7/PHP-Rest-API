# PHP-Rest-API
Todo app with a framework-less PHP Rest API on backend.

Uses the `fetch()` API to hit the backend and `ES6` for rendering the view and `Bootstrap` CSS framework.

# Setup
Currently the API will only read from the database and output on the client. 
Create a local DB `todo` and add a few `items` for title, body and id. 
Make sure to set `connectedToDb` to `true`.

Or

Keep `connectedToDb` set to `false`.
The client will render with mock data if no db in use.

# Up next
API:  Add and Delete

Client: Form to add item, hook up delete button


![alt text](https://i.imgur.com/0BLf5FX.png)
