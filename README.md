# Tecznique64
Tecznique64 is an obfuscated technique based on base64 or any other widely used encoding formats. 

## How it works
Tecznique64 encodes data into a specific encoding format before reversing the encoded output and injecting a single byte to corrupt the data during attempted decoding, multiple bytes can also be injected to further corrupt the data. The only way to decode the data is by reversing the output and knowing the specifc byte(s) and index before inputting them to the decoder. This is a simple obfuscation technique which can be used to bypass anti-virus software by encoding payloads. 
