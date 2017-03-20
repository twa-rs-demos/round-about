# WordPress研究

## 环境变量设置
新建文件 `.env`，写入 `docker-compose.yml` 所需环境变量，示例如下

```
db_host=10.0.0.12
db_user=wordpress
db_password=wordpress
```
重启容器，`docker-compose up -d`


## 文件夹权限修改
- 每次启动容器之后，运行脚本
```
./before_upload_files
```

- 在 git pull 或者 git push 之前，运行脚本
```
./before_git_pull
```


