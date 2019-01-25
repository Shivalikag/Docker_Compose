#electronics-item services
from flask import Flask
from flask_restful import Resource,Api

#instantiate the application
app = Flask(__name__)
api=Api(app)

class EItem(Resource):
	def get(self):
		return{
			'Eitems':['DHT11','NodeMCU','ESP32',' RPI','HCSR04']
		}
#create routes
api.add_resource(EItem,'/')

#Run Application
if __name__=='__main__':
	app.run(host='0.0.0.0',port=80,debug=True)


