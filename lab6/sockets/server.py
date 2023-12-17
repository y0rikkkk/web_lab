import socket

HOST = "127.0.0.1"
PORT = 3333

server = socket.socket(socket.AF_INET, socket.SOCK_STREAM)

with server:
    server.bind((HOST, PORT))
    server.listen()

    conn, addr = server.accept()
    with conn:
        data = conn.recv(1024)
        print(data.decode("utf-8"))
        conn.send(b"Hello client")
