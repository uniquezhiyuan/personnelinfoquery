import pymysql

f=open("c:/data/info.csv")

connect=pymysql.Connect(
        host='45.127.97.71',
        port=3306,
        user='root',
        passwd='zhiyuan',
        db='info',
        charset='utf8'
        )

cursor=connect.cursor()

for line in f:
    l=line.split(',')
    name,unit,nation,family,hometown,political,degree,rank,id,gender,birthday,enlisttime,ccytime,address,code,tel,honor=l
    sql2=u'''insert into info values('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s');'''%(name,unit,nation,family,hometown,political,degree,rank,id,gender,birthday,enlisttime,ccytime,address,code,tel,honor)
    cursor.execute(sql2)
