"""
-.-. .-. ..- ... - .-.-.- .--- ... 
Python Server Handler for crust remote parser.
:author Prashant Sinha <prashantsinha@outlook.com>
:version 0.1 20140925
"""
from bottle import route, run
from view import *

@route('/')
def Home():
	return view.usage()


if __name__ == "__main__":
	run(host='localhost', port=50, debug=True)