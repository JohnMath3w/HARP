import RPi.GPIO as GPIO
import urllib2
GPIO.setwarnings(False)
GPIO.setmode(GPIO.BOARD)
GPIO.setup(5,GPIO.OUT)
GPIO.setup(6,GPIO.OUT)
GPIO.setup(13,GPIO.OUT)
true = 1
while(true):
                try:
                        for line1 in urllib2.urlopen('http://www.harp.esy.es/device1.txt'):
                            status1 = line1
                        for line2 in urllib2.urlopen('http://www.harp.esy.es/device2.txt'):
                            status2 = line2
                        for line3 in urllib2.urlopen('http://www.harp.esy.es/device3.txt'):
                            status3 = line3
                except urllib2.HTTPError, e:
                                        print e.code

                except urllib2.URLError, e:
                                        print e.args
                
                print status1
                print status2
                print status3
                if status1=='ON':
                                GPIO.output(5,True)
                elif status1=='OFF':
                                GPIO.output(5,False)
				if status2=='ON':
                                GPIO.output(6,True)
                elif status2=='OFF':
                                GPIO.output(6,False)
				if status3=='ON':
                                GPIO.output(13,True)
                elif status3=='OFF':
                                GPIO.output(13,False)
				

