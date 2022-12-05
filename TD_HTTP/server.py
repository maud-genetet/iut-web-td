import socket
import socketserver
import datetime




class WebServer(socketserver.BaseRequestHandler):
    def handle(self):
        client = self.request
        io = client.makefile()

        # Receiving client commands line per line
        print('> Request: ')
        receivingHeaders = True
        i = 0;
        page = "/"
        queryString = ""
        
        while receivingHeaders:
            
            line = io.readline().strip()
            if (i == 0) :
                print("line = ", line)
                
                page = line.split()[1]
                print("Page = ", page)
                if '?' in page:
                    c = page
                    page = c.split('?',1)[0]
                    queryString = c.split('?',1)[1]
                print("QueryString = ", queryString)
                i = 1

            print(line)
            if line == '':
                receivingHeaders = False
                
        ## revoie un dictionnaire avec les élements passé en Get
        def donneesGet(part2):
            key = ""
            val = ""
            dico = {}
            b = False
            for i in part2:
                if i == '&':
                    b = False
                    dico[key]=val
                    val = ""
                    key = ""
                elif i == '=':
                    b = True
                elif b:
                    val += i
                elif not(b):
                    key += i  
            dico[key]=val
            return dico
            
            
        
##################################################################                    

        # Creating a response for the client
        print('> Response: ')
        response = "HTTP/1.1 200 OK\r\n"
        
        ## affichage de la page avec l'image
        if page == "/Corgi.jpg":
            response += "Content-type: image/jpg\r\n"
            response += "\r\n"
            
            img = open('Corgi.jpg', 'rb')
            data = img.read()
            img.close()
            
            client.sendall(response.encode('utf-8')+ data)
            
        ## affichage des autres pages
        else :
            
            response += "Content-type: text/html\r\n"
            response += "\r\n Il est : "
            response += datetime.datetime.now().strftime('%H:%M')
            response += "\r\n"
            response += "coucou \r\n"
            
            ## affichage de la page /test
            if page == '/test':
                response += "page test\r\n"
                response += "<a style=margin:5px href='/'>Accueil</a>"
                response += "<a style=margin:5px href='/Corgi.jpg'>Voir le Corgi !</a>"
                response += "<h1 style=color:blue >Bienvenue sur la page test</h1>\r\n"
                
            ## sinon ce qu'on doit mettre sur les autres pages
            else : 
                response += "<a style=margin:5px href='/test'>Page Test</a>"
                response += "<a style=margin:5px href='/Corgi.jpg'>Voir le Corgi !</a>"
                response += "<h1 style=color:red >accueil</h1>\r\n"
                response += "<p> Nous sommes sur la page : "+page+"</p>"
            
            ## formulaire pour calculer
            response += "<form method='get'> Nombre 1: <input type='number' name='n1' /><br />Nombre 2: <input type='number' name='n2' /><br /><input type='submit' value='Additioner!' /></form>"
            if queryString != '':
                dico = donneesGet(queryString)
                somme = 0
                if dico['n1'] != '':
                    somme += int(dico['n1'])
                if dico['n2'] != '':
                    somme += int(dico['n2'])
                response += str(somme)
                
            response += "</br><img style=width:30vw src='Corgi.jpg'>"
            
            client.sendall(response.encode('utf-8'))


HOST, PORT = "127.0.0.1", 8080
socketserver.TCPServer.allow_reuse_address = True
with socketserver.TCPServer((HOST, PORT), WebServer) as server:
    server.serve_forever()
