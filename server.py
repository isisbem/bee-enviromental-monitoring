from flask import Flask, render_template

app = Flask(__name__)

@app.route('/')
def index():
    return render_template('index.html')


@app.route('/contatti')
def contatti():
    return render_template('contatti.html')


@app.route('/chi_siamo')
def chi_siamo():
    return render_template('chi_siamo.html')


@app.route('/ipanel')
def ipanel_static():
    return render_template('ipanel/static.html')

if __name__ == '__main__':
    app.run(debug=True, host='0.0.0.0')
