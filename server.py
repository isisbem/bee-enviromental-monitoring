import io
import json
from flask import Flask, render_template

app = Flask(__name__)

@app.route('/')
def index():
    return render_template('index.html')


@app.route('/chi_siamo')
def chi_siamo():
    return render_template('chi_siamo.html')


@app.route('/ipanel')
def ipanel_static():
    return render_template('ipanel/static.html')

@app.route('/faq')
def faq():
    with io.open('./static/data/faq.json', 'r', encoding='utf-8') as f:
        faqs = json.load(f)

    return render_template('faq.html', faqs=faqs)

if __name__ == '__main__':
    app.run(debug=True, host='0.0.0.0')
