from flask import Flask, send_file
app = Flask(__name__)

@app.route('/')
def index():
    return send_file('/Users/erikishbaev/Desktop/Учеба/WEB прог/ЛР_2/labtwo/index.html')

if __name__ == '__main__':
    app.run(host= '0.0.0.0', port=888)