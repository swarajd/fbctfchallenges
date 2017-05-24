from random import randint, sample
from collections import defaultdict

def insert_str(string, str_to_insert, index):
    return string[:index] + str_to_insert + string[index:]

nodes = set(range(1, 51))

next_node = 1
nodes.remove(1)

d = defaultdict(int)

for i in range(1, 51):
    d[i] = -1

while len(nodes) != 0:
    
    cur_node = next_node

    next_node = sample(nodes, 1)[0]
    nodes.remove(next_node)

    d[cur_node] = next_node

for k, v in d.iteritems():
    # print(k, v)
    filename = 'node{}.php'.format(k)
    rf = open(filename, "r")

    lines = [line for line in rf]
    # print(filename, lines)

    if (v != -1):
        next_line = lines[6]
        next_node_name = '/node{}.php'.format(v)
        next_line = insert_str(next_line, next_node_name, 16)
        lines[6] = next_line
    else:
        answ_line = lines[7]
        answ_line = insert_str(answ_line, "low_key_pointers", 16)
        lines[7] = answ_line

    wf = open(filename, "w")

    for line in lines:
        wf.write(line)