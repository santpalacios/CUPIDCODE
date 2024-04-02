import  express  from  'express';
import logger from 'morgan';

//se importa la creacion del servidor y el socket.io
import { Server } from 'socket.io';
import { createServer } from 'http';


const port = process.env.PORT ?? 3001;
const app = express()

const server = createServer(app)
const io = new Server(server ,{
   connectionStateRecorvery: {}
})


//se inicializa el socket.io
io.on('connection',(socket) => {
   console.log('user connected')

   socket.on('disconnect', () => {
      console.log('user disconnected')
   })


   socket.on('chat message', (msg) => {
      io.emit('chat message', msg)
     })
})



app.use(logger('dev'))

app.get('/' ,(req ,res) => {
   res.sendFile(process.cwd()+ '/CUPIDCODE/MODAL-main/index.html')
})

server.listen(port, () => {
   console.log(`Server running on port ${port}`)
  })

