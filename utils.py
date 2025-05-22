import requests

def fetch_joke():
    url = "https://official-joke-api.appspot.com/random_joke"
    try:
        response = requests.get(url)
        response.raise_for_status()
        data = response.json()
        return data['setup'], data['punchline']
    except Exception as e:
        print(f"error fetching joke: {e}")
        return None, None