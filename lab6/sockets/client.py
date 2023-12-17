import socket

HOST = "127.0.0.1"
PORT = 3333

client = socket.socket(socket.AF_INET, socket.SOCK_STREAM)

with client:
    client.connect((HOST, PORT))
    client.send(b"Hello, server")
    data = client.recv(1024)

print(data.decode("utf-8"))
