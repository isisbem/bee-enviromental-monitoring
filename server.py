from flask import Flask, render_template

app = Flask(__name__)

@app.route('/')
def index():
    return render_template('index.html')

@app.route('/faq')
def faq():
    return render_template('faq.html')

@app.route('/test')
def test():
    return render_template('test.html')

@app.route('/test_graph')
def test_graph():
    return render_template('test_graph.html')

if __name__ == '__main__':
    app.run(debug=True, host='0.0.0.0')
