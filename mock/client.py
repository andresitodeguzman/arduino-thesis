import http.client

def request():
    url = "192.168.43.243/api/arduino/add.php?device_id=1&temperature=50&humidity=20&flood_level=1"
    
    request = http.client.HTTPConnection(url,80,timeout=10)
    request.getresponse()