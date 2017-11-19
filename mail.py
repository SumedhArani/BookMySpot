from flask import Flask, render_template, request
from flask_mail import Mail, Message
import random

app = Flask(__name__)
mail=Mail(app)

app.config['MAIL_SERVER']='smtp.gmail.com'
app.config['MAIL_PORT'] = 465
app.config['MAIL_USERNAME'] = 'bookmyspot2@gmail.com'
app.config['MAIL_PASSWORD'] = 'qwertyasdfgh'
app.config['MAIL_USE_TLS'] = False
app.config['MAIL_USE_SSL'] = True
mail = Mail(app)



@app.route('/')
def student():
   return render_template('h1.html')

@app.route('/h1',methods = ['POST', 'GET'])
def result():
	   if request.method == 'POST':
		    result=request.form
		    arandom=str(random.randint(100000,999999))
		    message="Your OTP is "+arandom
		    email=result['email']
		    index(message,email)
		    return render_template('h2.html',result=result)

		    '''
		    #msg = Message('Hello', sender = 'nayani.tarun@gmail.com', recipients = ['tarun.nayani@gmail.com'])
		    a=""
		    for x,y in result.items():
		    	a=a+x+"   "+y+"\n"
		    if(result['Password']=="abcd"):
		    	index(a,result,"http://localhost/P/bootstrap/startbootstrap-freelancer-gh-pages/#")
		    	return render_template('h2.html')	
	   return render_template('h1.html',result=result)
	   '''


@app.route("/")
def index(message,email):
   #msg = Message('WT-2 Project', sender = 'nayani.tarun@gmail.com', recipients = ['result.Email'])
   #print(result.Email)
   msg = Message('Your One Time Password (OTP)', sender = 'bookmyspot2@gmail.com', recipients = [email])
   #msg.body = st+"   "+rr
   msg.body =message
   mail.send(msg)
   return ""		    

if __name__ == '__main__':
   app.run(debug = True)