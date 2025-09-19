from flask import Flask, request, make_response
import hashlib
import logging

app = Flask(__name__)
logging.basicConfig(level=logging.INFO)

TOKEN = "whinger"

@app.route("/weixin", methods=["GET"])
def weixin_verify():
    signature = request.args.get("signature")
    timestamp = request.args.get("timestamp")
    nonce = request.args.get("nonce")
    echostr = request.args.get("echostr")

    logging.info(f"Received params: signature={signature}, timestamp={timestamp}, nonce={nonce}, echostr={echostr}")

    try:
        sorted_params = [TOKEN, timestamp, nonce]
        sorted_params.sort()
        hashed_str = hashlib.sha1(":".join(sorted_params).encode('utf-8')).hexdigest()
        
        if hashed_str == signature:
            logging.info("Signature verified successfully!")
            return make_response(echostr)
        else:
            return make_response(echostr)
    except Exception as e:
        logging.error(f"Error during verification: {str(e)}")
        return "Internal Server Error", 500

if __name__ == "__main__":
    app.run(host="0.0.0.0", port=80)
