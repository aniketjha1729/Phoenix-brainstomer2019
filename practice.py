import pandas as pd
dataset=pd.read_csv("/home/shashwat/Downloads/NSL-KDD")
dataset2=dataset[dataset["42"] == "ipsweep"]
print(dataset2)